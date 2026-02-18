<?php

/*
 * Generated from Scedel.g4 by ANTLR 4.13.2
 */

namespace Scedel\Generated;
use Antlr\Antlr4\Runtime\Tree\AbstractParseTreeVisitor;

/**
 * This class provides an empty implementation of {@see ScedelVisitor},
 * which can be extended to create a visitor which only needs to handle a subset
 * of the available methods.
 */
class ScedelBaseVisitor extends AbstractParseTreeVisitor implements ScedelVisitor
{
	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitFile(Context\FileContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitVersionDirective(Context\VersionDirectiveContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitFileItem(Context\FileItemContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAnnotatedDecl(Context\AnnotatedDeclContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitDecl(Context\DeclContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitIncludeStatement(Context\IncludeStatementContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitInlineAnnotation(Context\InlineAnnotationContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitTargetedAnnotationStatement(Context\TargetedAnnotationStatementContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAnnotationKey(Context\AnnotationKeyContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAnnotationTarget(Context\AnnotationTargetContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitTypeDeclaration(Context\TypeDeclarationContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitValidatorDeclaration(Context\ValidatorDeclarationContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitTypeExpr(Context\TypeExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitUnionExpr(Context\UnionExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitIntersectExpr(Context\IntersectExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPostfixExpr(Context\PostfixExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitNullableSuffix(Context\NullableSuffixContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAbsentKw(Context\AbsentKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAtomExpr(Context\AtomExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitNullableBaseOrId(Context\NullableBaseOrIdContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitArraySuffix(Context\ArraySuffixContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitRecordType(Context\RecordTypeContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitFieldList(Context\FieldListContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitFieldDecl(Context\FieldDeclContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitField(Context\FieldContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitDefaultExpr(Context\DefaultExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitNullKw(Context\NullKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitDictKw(Context\DictKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitDictType(Context\DictTypeContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitWhenKw(Context\WhenKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitThenKw(Context\ThenKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitElseKw(Context\ElseKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitConditionalType(Context\ConditionalTypeContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitCondExpr(Context\CondExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPredicate(Context\PredicateContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitMatchesKw(Context\MatchesKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAndKw(Context\AndKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitOrKw(Context\OrKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitNotKw(Context\NotKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPredicateOrExpr(Context\PredicateOrExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPredicateAndExpr(Context\PredicateAndExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPredicateNotExpr(Context\PredicateNotExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPredicatePrimaryExpr(Context\PredicatePrimaryExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitExpression(Context\ExpressionContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitAdditiveExpr(Context\AdditiveExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitMultiplicativeExpr(Context\MultiplicativeExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitUnaryExpr(Context\UnaryExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitValueExpr(Context\ValueExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitFunctionCall(Context\FunctionCallContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitExpressionList(Context\ExpressionListContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitEmptyArrayExpr(Context\EmptyArrayExprContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitThisKw(Context\ThisKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitParentKw(Context\ParentKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitRootKw(Context\RootKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitPath(Context\PathContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitCompareOp(Context\CompareOpContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitParamList(Context\ParamListContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitParam(Context\ParamContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitValidatorBody(Context\ValidatorBodyContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitConstraintList(Context\ConstraintListContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitConstraint(Context\ConstraintContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitConstraintCallArgList(Context\ConstraintCallArgListContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitConstraintCallArg(Context\ConstraintCallArgContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitArgValue(Context\ArgValueContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitTrueKw(Context\TrueKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitFalseKw(Context\FalseKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitLiteral(Context\LiteralContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitIdentifier(Context\IdentifierContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitScedelVersionKw(Context\ScedelVersionKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitIncludeKw(Context\IncludeKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitTypeKw(Context\TypeKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitValidatorKw(Context\ValidatorKwContext $context)
	{
	    return $this->visitChildren($context);
	}

	/**
	 * {@inheritdoc}
	 *
	 * The default implementation returns the result of calling
	 * {@see self::visitChildren()} on `context`.
	 */
	public function visitOnKw(Context\OnKwContext $context)
	{
	    return $this->visitChildren($context);
	}
}