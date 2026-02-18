<?php

declare(strict_types=1);

namespace Scedel\Parser;

use RuntimeException;
use Scedel\ErrorCode;
use Scedel\Ast\AbsentTypeNode;
use Scedel\Ast\ArithmeticOperator;
use Scedel\Ast\AnnotatedDeclarationNode;
use Scedel\Ast\AnnotationNode;
use Scedel\Ast\AnnotationTargetNode;
use Scedel\Ast\ArgValueNode;
use Scedel\Ast\ArrayTypeNode;
use Scedel\Ast\BinaryArithmeticExprNode;
use Scedel\Ast\BinaryPredicateNode;
use Scedel\Ast\BinaryPredicateOperator;
use Scedel\Ast\BoolLiteralNode;
use Scedel\Ast\CompareOperator;
use Scedel\Ast\ComparePredicateNode;
use Scedel\Ast\ConditionalTypeNode;
use Scedel\Ast\ConstraintCallArgNode;
use Scedel\Ast\ConstraintNode;
use Scedel\Ast\DictTypeNode;
use Scedel\Ast\DurationLiteralNode;
use Scedel\Ast\EmptyArrayExprNode;
use Scedel\Ast\ExpressionDefaultExprNode;
use Scedel\Ast\ExpressionNode;
use Scedel\Ast\FieldNode;
use Scedel\Ast\FieldPathAnnotationTargetNode;
use Scedel\Ast\FieldSetAnnotationTargetNode;
use Scedel\Ast\FileNode;
use Scedel\Ast\FunctionCallExprNode;
use Scedel\Ast\IncludeNode;
use Scedel\Ast\IntersectionTypeNode;
use Scedel\Ast\ListArgNode;
use Scedel\Ast\LiteralNode;
use Scedel\Ast\LiteralTypeNode;
use Scedel\Ast\MatchesPredicateNode;
use Scedel\Ast\NamedTypeNode;
use Scedel\Ast\NotPredicateNode;
use Scedel\Ast\NullLiteralNode;
use Scedel\Ast\NullableNamedTypeNode;
use Scedel\Ast\NullableTypeNode;
use Scedel\Ast\NumberLiteralNode;
use Scedel\Ast\PathNode;
use Scedel\Ast\PathRootKind;
use Scedel\Ast\PredicateNode;
use Scedel\Ast\PredicateValidatorBodyNode;
use Scedel\Ast\RecordTypeNode;
use Scedel\Ast\SchemaVersionNode;
use Scedel\Ast\SingleArgNode;
use Scedel\Ast\StringLiteralNode;
use Scedel\Ast\TargetedAnnotationNode;
use Scedel\Ast\TypeAnnotationTargetNode;
use Scedel\Ast\TypeDeclarationNode;
use Scedel\Ast\TypeExprNode;
use Scedel\Ast\UnaryArithmeticExprNode;
use Scedel\Ast\UnaryArithmeticOperator;
use Scedel\Ast\UnionTypeNode;
use Scedel\Ast\ValidatorDeclarationNode;
use Scedel\Ast\ValidatorParamNode;
use Scedel\Generated\Context;
use Scedel\Generated\ScedelBaseVisitor;

final class AstBuilderVisitor extends ScedelBaseVisitor
{
    public function visitFile(Context\FileContext $context)
    {
        $version = null;
        if ($context->versionDirective() !== null) {
            $version = $this->visitVersionDirective($context->versionDirective());
        }

        $includes = [];
        foreach ($this->asArray($context->includeStatement()) as $includeContext) {
            $includes[] = $this->visitIncludeStatement($includeContext);
        }

        $statements = [];
        foreach ($this->asArray($context->fileItem()) as $itemContext) {
            if ($itemContext->annotatedDecl() !== null) {
                $statements[] = $this->visitAnnotatedDecl($itemContext->annotatedDecl());
                continue;
            }

            if ($itemContext->targetedAnnotationStatement() !== null) {
                $statements[] = $this->visitTargetedAnnotationStatement($itemContext->targetedAnnotationStatement());
                continue;
            }

            throw new RuntimeException('Unknown file item node');
        }

        return new FileNode($version, $includes, $statements);
    }

    public function visitVersionDirective(Context\VersionDirectiveContext $context)
    {
        $token = $context->VersionLiteral()?->getText();
        if ($token === null) {
            throw new ParseException(
                'Invalid version directive format. Expected MAJOR.MINOR or MAJOR.MINOR.PATCH.',
                errorCode: ErrorCode::InvalidVersionDirective,
            );
        }

        $parts = array_map('intval', explode('.', $token));
        if (count($parts) < 2 || count($parts) > 3) {
            throw new ParseException(
                'Invalid version directive format. Expected MAJOR.MINOR or MAJOR.MINOR.PATCH.',
                errorCode: ErrorCode::InvalidVersionDirective,
            );
        }

        return new SchemaVersionNode(
            major: $parts[0],
            minor: $parts[1],
            patch: $parts[2] ?? 0,
        );
    }

    public function visitIncludeStatement(Context\IncludeStatementContext $context)
    {
        $token = $context->StringLiteral()?->getText();
        if ($token === null) {
            throw new RuntimeException('Include path is missing');
        }

        return new IncludeNode($this->unescapeQuotedLiteral($token));
    }

    public function visitAnnotatedDecl(Context\AnnotatedDeclContext $context)
    {
        $annotations = [];
        foreach ($this->asArray($context->inlineAnnotation()) as $annotationContext) {
            $annotations[] = $this->visitInlineAnnotation($annotationContext);
        }

        $declarationContext = $context->decl();
        if ($declarationContext === null) {
            throw new RuntimeException('Declaration is missing');
        }

        $declaration = $this->visitDecl($declarationContext);

        return new AnnotatedDeclarationNode($annotations, $declaration);
    }

    public function visitInlineAnnotation(Context\InlineAnnotationContext $context)
    {
        return $this->buildAnnotation($context->annotationKey(), $context->StringLiteral()?->getText());
    }

    public function visitTargetedAnnotationStatement(Context\TargetedAnnotationStatementContext $context)
    {
        $targetContext = $context->annotationTarget();
        if ($targetContext === null) {
            throw new RuntimeException('Targeted annotation is missing target');
        }

        return new TargetedAnnotationNode(
            annotation: $this->buildAnnotation($context->annotationKey(), $context->StringLiteral()?->getText()),
            target: $this->visitAnnotationTarget($targetContext),
        );
    }

    public function visitAnnotationTarget(Context\AnnotationTargetContext $context)
    {
        $identifiers = array_map(
            static fn ($identifier): string => $identifier->getText(),
            $this->asArray($context->identifier()),
        );

        if ($identifiers === []) {
            throw new RuntimeException('Annotation target is missing type name');
        }

        if ($context->LBRACE() !== null) {
            if (count($identifiers) < 2) {
                throw new RuntimeException('Field set target must contain at least one field name');
            }

            $typeName = array_shift($identifiers);

            return new FieldSetAnnotationTargetNode($typeName, $identifiers);
        }

        if (count($identifiers) === 1) {
            return new TypeAnnotationTargetNode($identifiers[0]);
        }

        $typeName = array_shift($identifiers);

        return new FieldPathAnnotationTargetNode($typeName, $identifiers);
    }

    public function visitDecl(Context\DeclContext $context)
    {
        if ($context->typeDeclaration() !== null) {
            return $this->visitTypeDeclaration($context->typeDeclaration());
        }

        if ($context->validatorDeclaration() !== null) {
            return $this->visitValidatorDeclaration($context->validatorDeclaration());
        }

        throw new RuntimeException('Unknown declaration node');
    }

    public function visitTypeDeclaration(Context\TypeDeclarationContext $context)
    {
        $name = $this->readIdentifierText($context->identifier(0), 'Type name is missing');

        if ($context->typeExpr() === null) {
            throw new ParseException('Type declaration must define a body.', errorCode: ErrorCode::InvalidExpression);
        }

        return new TypeDeclarationNode($name, $this->visitTypeExpr($context->typeExpr()));
    }

    public function visitValidatorDeclaration(Context\ValidatorDeclarationContext $context)
    {
        $targetType = $this->readIdentifierText($context->identifier(0), 'Validator declaration should contain target type');
        $name = $this->readIdentifierText($context->identifier(1), 'Validator declaration should contain validator name');

        $params = [];
        $paramListContext = $context->paramList();
        if ($paramListContext !== null) {
            foreach ($this->asArray($paramListContext->param()) as $paramContext) {
                $params[] = $this->visitParam($paramContext);
            }
        }

        $bodyContext = $context->validatorBody();
        if ($bodyContext === null) {
            throw new RuntimeException('Validator body is missing');
        }

        $body = $this->visitValidatorBody($bodyContext);

        return new ValidatorDeclarationNode(
            targetType: $targetType,
            name: $name,
            params: $params,
            body: $body,
        );
    }

    public function visitTypeExpr(Context\TypeExprContext $context)
    {
        $unionContext = $context->unionExpr();
        if ($unionContext === null) {
            throw new RuntimeException('Type expression is missing union expression');
        }

        return $this->visitUnionExpr($unionContext);
    }

    public function visitUnionExpr(Context\UnionExprContext $context)
    {
        $items = [];
        foreach ($this->asArray($context->intersectExpr()) as $intersectContext) {
            $items[] = $this->visitIntersectExpr($intersectContext);
        }

        if (count($items) === 1) {
            return $items[0];
        }

        return new UnionTypeNode($items);
    }

    public function visitIntersectExpr(Context\IntersectExprContext $context)
    {
        $items = [];
        foreach ($this->asArray($context->postfixExpr()) as $postfixContext) {
            $items[] = $this->visitPostfixExpr($postfixContext);
        }

        if (count($items) === 1) {
            return $items[0];
        }

        return new IntersectionTypeNode($items);
    }

    public function visitPostfixExpr(Context\PostfixExprContext $context)
    {
        $atomContext = $context->atomExpr();
        if ($atomContext === null) {
            throw new RuntimeException('Postfix expression is missing atom expression');
        }

        $typeExpr = $this->visitAtomExpr($atomContext);

        foreach ($this->asArray($context->arraySuffix()) as $suffixContext) {
            $constraints = [];
            if ($suffixContext->constraintList() !== null) {
                $constraints = $this->visitConstraintList($suffixContext->constraintList());
            }

            $typeExpr = new ArrayTypeNode($typeExpr, $constraints);
        }

        if ($context->nullableSuffix() !== null) {
            $typeExpr = new NullableTypeNode($typeExpr);
        }

        return $typeExpr;
    }

    public function visitAtomExpr(Context\AtomExprContext $context)
    {
        if ($context->literal() !== null) {
            return new LiteralTypeNode($this->visitLiteral($context->literal()));
        }

        if ($context->identifier(0) !== null) {
            $constraints = [];
            if ($context->constraintList() !== null) {
                $constraints = $this->visitConstraintList($context->constraintList());
            }

            return new NamedTypeNode($context->identifier(0)->getText(), $constraints);
        }

        if ($context->recordType() !== null) {
            return $this->visitRecordType($context->recordType());
        }

        if ($context->dictType() !== null) {
            return $this->visitDictType($context->dictType());
        }

        if ($context->conditionalType() !== null) {
            return $this->visitConditionalType($context->conditionalType());
        }

        if ($context->typeExpr() !== null) {
            return $this->visitTypeExpr($context->typeExpr());
        }

        if ($context->absentKw() !== null) {
            return new AbsentTypeNode();
        }

        if ($context->nullableBaseOrId() !== null) {
            return $this->visitNullableBaseOrId($context->nullableBaseOrId());
        }

        throw new RuntimeException('Unknown atom expression alternative');
    }

    public function visitNullableBaseOrId(Context\NullableBaseOrIdContext $context)
    {
        $name = $this->readIdentifierText($context->identifier(0), 'Nullable type name is missing');

        return new NullableNamedTypeNode($name);
    }

    public function visitRecordType(Context\RecordTypeContext $context)
    {
        $fields = [];
        $fieldListContext = $context->fieldList();

        if ($fieldListContext !== null) {
            foreach ($this->asArray($fieldListContext->fieldDecl()) as $fieldContext) {
                $fields[] = $this->visitFieldDecl($fieldContext);
            }
        }

        return new RecordTypeNode($fields);
    }

    public function visitFieldDecl(Context\FieldDeclContext $context)
    {
        $annotations = [];
        foreach ($this->asArray($context->inlineAnnotation()) as $annotationContext) {
            $annotations[] = $this->visitInlineAnnotation($annotationContext);
        }

        $fieldContext = $context->field();
        if ($fieldContext === null) {
            throw new RuntimeException('Field declaration is missing field node');
        }

        $field = $this->visitField($fieldContext);

        return new FieldNode(
            name: $field->name,
            optional: $field->optional,
            type: $field->type,
            default: $field->default,
            annotations: $annotations,
        );
    }

    public function visitField(Context\FieldContext $context)
    {
        $name = $context->identifier(0)?->getText();
        $typeContext = $context->typeExpr();

        if ($name === null || $typeContext === null) {
            throw new RuntimeException('Field name or type is missing');
        }

        $default = null;
        if ($context->defaultExpr() !== null) {
            $default = $this->visitDefaultExpr($context->defaultExpr());
        }

        return new FieldNode(
            name: $name,
            optional: $context->QMARK() !== null,
            type: $this->visitTypeExpr($typeContext),
            default: $default,
        );
    }

    public function visitDefaultExpr(Context\DefaultExprContext $context)
    {
        $expressionContext = $context->expression();
        if ($expressionContext === null) {
            throw new RuntimeException('Default expression is missing');
        }

        return new ExpressionDefaultExprNode($this->visitExpression($expressionContext));
    }

    public function visitDictType(Context\DictTypeContext $context)
    {
        $keyTypeContext = $context->typeExpr(0);
        $valueTypeContext = $context->typeExpr(1);

        if ($keyTypeContext === null || $valueTypeContext === null) {
            throw new RuntimeException('Dict type must contain key and value expressions');
        }

        return new DictTypeNode(
            keyType: $this->visitTypeExpr($keyTypeContext),
            valueType: $this->visitTypeExpr($valueTypeContext),
        );
    }

    public function visitConditionalType(Context\ConditionalTypeContext $context)
    {
        $conditionContext = $context->condExpr();
        $thenContext = $context->typeExpr(0);
        $elseContext = $context->typeExpr(1);

        if ($conditionContext === null || $thenContext === null || $elseContext === null) {
            throw new RuntimeException('Conditional type is incomplete');
        }

        return new ConditionalTypeNode(
            condition: $this->visitCondExpr($conditionContext),
            thenType: $this->visitTypeExpr($thenContext),
            elseType: $this->visitTypeExpr($elseContext),
        );
    }

    public function visitCondExpr(Context\CondExprContext $context)
    {
        $expressionContext = $context->expression();
        if ($expressionContext === null) {
            throw new RuntimeException('Conditional expression is missing');
        }

        return $this->asPredicateNode(
            $this->visitExpression($expressionContext),
            'Conditional expression must resolve to a predicate',
        );
    }

    public function visitPredicate(Context\PredicateContext $context)
    {
        $orContext = $context->predicateOrExpr();
        if ($orContext === null) {
            throw new RuntimeException('Predicate expression is missing');
        }

        return $this->visitPredicateOrExpr($orContext);
    }

    public function visitPredicateOrExpr(Context\PredicateOrExprContext $context)
    {
        $items = [];
        foreach ($this->asArray($context->predicateAndExpr()) as $predicateContext) {
            $items[] = $this->visitPredicateAndExpr($predicateContext);
        }

        if ($items === []) {
            throw new RuntimeException('OR predicate requires at least one operand');
        }

        if (count($items) === 1) {
            return $items[0];
        }

        return $this->foldBinaryPredicate($items, BinaryPredicateOperator::OR);
    }

    public function visitPredicateAndExpr(Context\PredicateAndExprContext $context)
    {
        $items = [];
        foreach ($this->asArray($context->predicateNotExpr()) as $predicateContext) {
            $items[] = $this->visitPredicateNotExpr($predicateContext);
        }

        if ($items === []) {
            throw new RuntimeException('AND predicate requires at least one operand');
        }

        if (count($items) === 1) {
            return $items[0];
        }

        return $this->foldBinaryPredicate($items, BinaryPredicateOperator::AND);
    }

    public function visitPredicateNotExpr(Context\PredicateNotExprContext $context)
    {
        if ($context->notKw() !== null) {
            $innerContext = $context->predicateNotExpr();
            if ($innerContext === null) {
                throw new RuntimeException('Negated predicate is missing inner expression');
            }

            return new NotPredicateNode($this->visitPredicateNotExpr($innerContext));
        }

        $primaryContext = $context->predicatePrimaryExpr();
        if ($primaryContext === null) {
            throw new RuntimeException('Predicate node is incomplete');
        }

        return $this->visitPredicatePrimaryExpr($primaryContext);
    }

    public function visitPredicatePrimaryExpr(Context\PredicatePrimaryExprContext $context)
    {
        $additiveContexts = $this->asArray($context->additiveExpr());

        if ($context->compareOp() !== null) {
            if (count($additiveContexts) < 2) {
                throw new RuntimeException('Comparison predicate is incomplete');
            }

            return new ComparePredicateNode(
                left: $this->visitAdditiveExpr($additiveContexts[0]),
                operator: $this->mapCompareOperator($context->compareOp()),
                right: $this->visitAdditiveExpr($additiveContexts[1]),
            );
        }

        if ($context->matchesKw() !== null) {
            $regexToken = $context->RegexLiteral()?->getText();

            if ($additiveContexts === [] || $regexToken === null) {
                throw new RuntimeException('Matches predicate is incomplete');
            }

            return new MatchesPredicateNode(
                expression: $this->visitAdditiveExpr($additiveContexts[0]),
                regexPattern: $this->unescapeRegexLiteral($regexToken),
            );
        }

        if ($additiveContexts !== []) {
            return $this->visitAdditiveExpr($additiveContexts[0]);
        }

        throw new RuntimeException('Unknown predicate alternative');
    }

    public function visitExpression(Context\ExpressionContext $context)
    {
        if ($context->predicate() !== null) {
            return $this->visitPredicate($context->predicate());
        }

        throw new RuntimeException('Unknown expression alternative');
    }

    public function visitAdditiveExpr(Context\AdditiveExprContext $context)
    {
        $items = [];
        foreach ($this->asArray($context->multiplicativeExpr()) as $multiplicativeContext) {
            $items[] = $this->visitMultiplicativeExpr($multiplicativeContext);
        }

        if ($items === []) {
            throw new RuntimeException('Additive expression requires at least one operand');
        }

        $result = array_shift($items);
        foreach ($items as $index => $item) {
            $operatorText = $context->getChild($index * 2 + 1)?->getText();
            if (!is_string($operatorText)) {
                throw new RuntimeException('Additive expression operator is missing');
            }

            $result = new BinaryArithmeticExprNode(
                operator: $this->mapArithmeticOperator($operatorText),
                left: $result,
                right: $item,
            );
        }

        return $result;
    }

    public function visitMultiplicativeExpr(Context\MultiplicativeExprContext $context)
    {
        $items = [];
        foreach ($this->asArray($context->unaryExpr()) as $unaryContext) {
            $items[] = $this->visitUnaryExpr($unaryContext);
        }

        if ($items === []) {
            throw new RuntimeException('Multiplicative expression requires at least one operand');
        }

        $result = array_shift($items);
        foreach ($items as $index => $item) {
            $operatorText = $context->getChild($index * 2 + 1)?->getText();
            if (!is_string($operatorText)) {
                throw new RuntimeException('Multiplicative expression operator is missing');
            }

            $result = new BinaryArithmeticExprNode(
                operator: $this->mapArithmeticOperator($operatorText),
                left: $result,
                right: $item,
            );
        }

        return $result;
    }

    public function visitUnaryExpr(Context\UnaryExprContext $context)
    {
        if ($context->valueExpr() !== null) {
            return $this->visitValueExpr($context->valueExpr());
        }

        $inner = $context->unaryExpr();
        if ($inner === null) {
            throw new RuntimeException('Unary expression operand is missing');
        }

        $operator = $context->MINUS() !== null
            ? UnaryArithmeticOperator::MINUS
            : UnaryArithmeticOperator::PLUS;

        return new UnaryArithmeticExprNode(
            operator: $operator,
            operand: $this->visitUnaryExpr($inner),
        );
    }

    public function visitValueExpr(Context\ValueExprContext $context)
    {
        if ($context->literal() !== null) {
            return $this->visitLiteral($context->literal());
        }

        if ($context->path() !== null) {
            return $this->visitPath($context->path());
        }

        if ($context->functionCall() !== null) {
            return $this->visitFunctionCall($context->functionCall());
        }

        if ($context->emptyArrayExpr() !== null) {
            return $this->visitEmptyArrayExpr($context->emptyArrayExpr());
        }

        if ($context->expression() !== null) {
            return $this->visitExpression($context->expression());
        }

        throw new RuntimeException('Unknown value expression alternative');
    }

    public function visitFunctionCall(Context\FunctionCallContext $context)
    {
        $name = $this->readIdentifierText($context->identifier(0), 'Function call name is missing');

        $args = [];
        $expressionListContext = $context->expressionList();
        if ($expressionListContext !== null) {
            foreach ($this->asArray($expressionListContext->expression()) as $expressionContext) {
                $args[] = $this->visitExpression($expressionContext);
            }
        }

        return new FunctionCallExprNode($name, $args);
    }

    public function visitEmptyArrayExpr(Context\EmptyArrayExprContext $context)
    {
        return new EmptyArrayExprNode();
    }

    public function visitPath(Context\PathContext $context)
    {
        $identifierNodes = $this->asArray($context->identifier());
        $identifierTexts = array_map(static fn ($node): string => $node->getText(), $identifierNodes);

        if ($context->thisKw() !== null) {
            return new PathNode(PathRootKind::THIS, null, $identifierTexts);
        }

        if ($context->parentKw() !== null) {
            return new PathNode(PathRootKind::PARENT, null, $identifierTexts);
        }

        if ($context->rootKw() !== null) {
            return new PathNode(PathRootKind::ROOT, null, $identifierTexts);
        }

        if ($context->VariableIdentifier() !== null) {
            return new PathNode(
                PathRootKind::VARIABLE,
                $context->VariableIdentifier()->getText(),
                $identifierTexts,
            );
        }

        if ($identifierTexts === []) {
            throw new RuntimeException('Identifier-based path should start with identifier');
        }

        $rootName = array_shift($identifierTexts);

        return new PathNode(PathRootKind::IDENTIFIER, $rootName, $identifierTexts);
    }

    public function visitParam(Context\ParamContext $context)
    {
        $name = $this->readIdentifierText($context->identifier(0), 'Validator parameter name is missing');
        $typeHint = $context->identifier(1)?->getText();

        $default = null;
        if ($context->expression() !== null) {
            $default = $this->visitExpression($context->expression());
        }

        return new ValidatorParamNode(
            name: $name,
            typeHint: $typeHint,
            default: $default,
        );
    }

    public function visitValidatorBody(Context\ValidatorBodyContext $context)
    {
        $expressionContext = $context->expression();
        if ($expressionContext === null) {
            throw new RuntimeException('Validator body expression is missing');
        }

        return new PredicateValidatorBodyNode(
            $this->asPredicateNode(
                $this->visitExpression($expressionContext),
                'Validator body must resolve to a predicate expression',
            ),
        );
    }

    /**
     * @return ConstraintNode[]
     */
    public function visitConstraintList(Context\ConstraintListContext $context): array
    {
        $constraints = [];
        foreach ($this->asArray($context->constraint()) as $constraintContext) {
            $constraints[] = $this->visitConstraint($constraintContext);
        }

        return $constraints;
    }

    public function visitConstraint(Context\ConstraintContext $context)
    {
        $name = $this->readIdentifierText($context->identifier(0), 'Constraint name is missing');

        $arg = null;
        if ($context->argValue() !== null) {
            $arg = $this->visitArgValue($context->argValue());
        }

        $callArgs = [];
        $callArgListContext = $context->constraintCallArgList();
        if ($callArgListContext !== null) {
            $callArgs = $this->visitConstraintCallArgList($callArgListContext);
        }

        return new ConstraintNode(
            name: $name,
            negated: $context->notKw() !== null,
            arg: $arg,
            callArgs: $callArgs,
            usesCallSyntax: $context->LPAREN() !== null,
        );
    }

    /**
     * @return ConstraintCallArgNode[]
     */
    public function visitConstraintCallArgList(Context\ConstraintCallArgListContext $context): array
    {
        $args = [];
        foreach ($this->asArray($context->constraintCallArg()) as $argContext) {
            $args[] = $this->visitConstraintCallArg($argContext);
        }

        return $args;
    }

    public function visitConstraintCallArg(Context\ConstraintCallArgContext $context): ConstraintCallArgNode
    {
        $expressionContext = $context->expression();
        if ($expressionContext === null) {
            throw new RuntimeException('Constraint call argument value is missing');
        }

        $name = $context->identifier(0)?->getText();

        return new ConstraintCallArgNode(
            name: $name,
            value: $this->visitExpression($expressionContext),
        );
    }

    public function visitArgValue(Context\ArgValueContext $context)
    {
        $expressionContexts = $this->asArray($context->expression());
        if ($expressionContexts === []) {
            throw new RuntimeException('Argument value is empty');
        }

        $values = array_map(fn ($expressionContext): ExpressionNode => $this->visitExpression($expressionContext), $expressionContexts);

        if ($context->LBRACK() !== null) {
            return new ListArgNode($values);
        }

        return new SingleArgNode($values[0]);
    }

    public function visitLiteral(Context\LiteralContext $context)
    {
        if ($context->DurationLiteral() !== null) {
            return $this->parseDurationLiteralToken($context->DurationLiteral()->getText());
        }

        if ($context->StringLiteral() !== null) {
            return new StringLiteralNode($this->unescapeQuotedLiteral($context->StringLiteral()->getText()));
        }

        if ($context->VersionLiteral() !== null) {
            $raw = $context->VersionLiteral()->getText();
            $numericValue = (float) $raw;

            return new NumberLiteralNode($raw, $numericValue);
        }

        if ($context->NumberLiteral() !== null) {
            $raw = $context->NumberLiteral()->getText();
            $numericValue = str_contains($raw, '.') ? (float) $raw : (int) $raw;

            return new NumberLiteralNode($raw, $numericValue);
        }

        if ($context->UnsignedInt() !== null) {
            $raw = $context->UnsignedInt()->getText();
            return new NumberLiteralNode($raw, (int) $raw);
        }

        if ($context->trueKw() !== null) {
            return new BoolLiteralNode(true);
        }

        if ($context->falseKw() !== null) {
            return new BoolLiteralNode(false);
        }

        if ($context->nullKw() !== null) {
            return new NullLiteralNode();
        }

        throw new RuntimeException('Unknown literal alternative');
    }

    private function parseDurationLiteralToken(string $token): DurationLiteralNode
    {
        $raw = $this->unescapeQuotedLiteral($token);
        if (!preg_match(
            '/^(-?\d+)\s*(ms|s|m|h|d|w|milliseconds?|seconds?|minutes?|hours?|days?|weeks?)$/i',
            $raw,
            $matches,
        )) {
            throw new RuntimeException('Invalid duration literal: ' . $token);
        }

        $amount = (int) $matches[1];
        $unit = strtolower($matches[2]);
        $multiplier = match ($unit) {
            'ms', 'millisecond', 'milliseconds' => 1,
            's', 'second', 'seconds' => 1000,
            'm', 'minute', 'minutes' => 60 * 1000,
            'h', 'hour', 'hours' => 60 * 60 * 1000,
            'd', 'day', 'days' => 24 * 60 * 60 * 1000,
            'w', 'week', 'weeks' => 7 * 24 * 60 * 60 * 1000,
            default => throw new RuntimeException('Unsupported duration unit: ' . $unit),
        };

        return new DurationLiteralNode(
            raw: $raw,
            milliseconds: $amount * $multiplier,
        );
    }

    private function mapCompareOperator(Context\CompareOpContext $context): CompareOperator
    {
        if ($context->EQUAL() !== null) {
            return CompareOperator::EQUAL;
        }

        if ($context->NOT_EQUAL() !== null) {
            return CompareOperator::NOT_EQUAL;
        }

        if ($context->LESS() !== null) {
            return CompareOperator::LESS;
        }

        if ($context->LESS_OR_EQUAL() !== null) {
            return CompareOperator::LESS_OR_EQUAL;
        }

        if ($context->MOR() !== null) {
            return CompareOperator::MORE;
        }

        if ($context->MORE_OR_EQUAL() !== null) {
            return CompareOperator::MORE_OR_EQUAL;
        }

        throw new RuntimeException('Unknown compare operator');
    }

    private function mapArithmeticOperator(string $operator): ArithmeticOperator
    {
        return match ($operator) {
            '+' => ArithmeticOperator::ADD,
            '-' => ArithmeticOperator::SUBTRACT,
            '*' => ArithmeticOperator::MULTIPLY,
            '/' => ArithmeticOperator::DIVIDE,
            default => throw new RuntimeException('Unknown arithmetic operator: ' . $operator),
        };
    }

    /**
     * @param ExpressionNode[] $items
     */
    private function foldBinaryPredicate(array $items, BinaryPredicateOperator $operator): ExpressionNode
    {
        if ($items === []) {
            throw new RuntimeException('Cannot fold empty predicate list');
        }

        $result = array_shift($items);
        foreach ($items as $item) {
            $result = new BinaryPredicateNode(
                operator: $operator,
                left: $result,
                right: $item,
            );
        }

        return $result;
    }

    private function asPredicateNode(ExpressionNode $node, string $message): PredicateNode
    {
        if ($node instanceof PredicateNode) {
            return $node;
        }

        throw new RuntimeException($message);
    }

    private function buildAnnotation(?Context\AnnotationKeyContext $keyContext, ?string $valueToken): AnnotationNode
    {
        if ($keyContext === null) {
            throw new RuntimeException('Annotation key is missing');
        }

        $keyParts = [];
        foreach ($this->asArray($keyContext->identifier()) as $identifier) {
            $keyParts[] = $identifier->getText();
        }

        if ($keyParts === []) {
            throw new RuntimeException('Annotation key is empty');
        }

        $value = $valueToken !== null ? $this->unescapeQuotedLiteral($valueToken) : 'true';

        return new AnnotationNode($keyParts, $value);
    }

    private function readIdentifierText(?Context\IdentifierContext $context, string $message): string
    {
        $text = $context?->getText();
        if ($text === null || $text === '') {
            throw new RuntimeException($message);
        }

        return $text;
    }

    /**
     * @return array<mixed>
     */
    private function asArray(mixed $value): array
    {
        if ($value === null) {
            return [];
        }

        if (is_array($value)) {
            return $value;
        }

        return [$value];
    }

    private function unescapeQuotedLiteral(string $token): string
    {
        if (strlen($token) < 2) {
            return $token;
        }

        $first = $token[0];
        $last = $token[strlen($token) - 1];
        if (!(($first === '"' && $last === '"') || ($first === '\'' && $last === '\''))) {
            return $token;
        }

        $body = substr($token, 1, -1);
        $length = strlen($body);
        $result = '';

        for ($index = 0; $index < $length; $index++) {
            $char = $body[$index];

            if ($char !== '\\' || $index === $length - 1) {
                $result .= $char;
                continue;
            }

            $index++;
            $escaped = $body[$index];

            $result .= match ($escaped) {
                'n' => "\n",
                'r' => "\r",
                't' => "\t",
                '0' => "\0",
                '\\' => '\\',
                '"' => '"',
                '\'' => '\'',
                default => $escaped,
            };
        }

        return $result;
    }

    private function unescapeRegexLiteral(string $token): string
    {
        if (strlen($token) < 2 || $token[0] !== '/' || $token[strlen($token) - 1] !== '/') {
            return $token;
        }

        $body = substr($token, 1, -1);
        $length = strlen($body);
        $result = '';

        for ($index = 0; $index < $length; $index++) {
            $char = $body[$index];

            if ($char !== '\\' || $index === $length - 1) {
                $result .= $char;
                continue;
            }

            $next = $body[$index + 1];
            if ($next === '/' || $next === '\\') {
                $result .= $next;
            } else {
                $result .= '\\' . $next;
            }

            $index++;
        }

        return $result;
    }
}
