<?php

declare(strict_types=1);

namespace Scedel\Tests\Parser;

use PHPUnit\Framework\TestCase;
use Scedel\Ast\AnnotatedDeclarationNode;
use Scedel\Ast\ArithmeticOperator;
use Scedel\Ast\BinaryArithmeticExprNode;
use Scedel\Ast\DurationLiteralNode;
use Scedel\Ast\ExpressionDefaultExprNode;
use Scedel\Ast\FieldNode;
use Scedel\Ast\PathNode;
use Scedel\Ast\RecordTypeNode;
use Scedel\Ast\TypeDeclarationNode;
use Scedel\Parser\ParserService;

final class ExpressionTest extends TestCase
{
    public function testDefaultExpressionPreservesArithmeticPrecedence(): void
    {
        $source = <<<'SCED'
        type Root = {
            expiresAt: DateTime default this.createdAt + 30d * 2
        }
        SCED;

        $ast = (new ParserService())->parseString($source, 'arithmetic-default.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(RecordTypeNode::class, $declaration->expr);

        /** @var FieldNode $field */
        $field = $declaration->expr->fields[0];
        self::assertInstanceOf(ExpressionDefaultExprNode::class, $field->default);
        self::assertInstanceOf(BinaryArithmeticExprNode::class, $field->default->expression);
        self::assertSame(ArithmeticOperator::ADD, $field->default->expression->operator);
        self::assertInstanceOf(PathNode::class, $field->default->expression->left);
        self::assertInstanceOf(BinaryArithmeticExprNode::class, $field->default->expression->right);
        self::assertSame(ArithmeticOperator::MULTIPLY, $field->default->expression->right->operator);
    }

    public function testDurationLiteralIsParsedIntoTypedNode(): void
    {
        $source = <<<'SCED'
        type Root = DateTime(min: this.startedAt + 1h)
        SCED;

        $ast = (new ParserService())->parseString($source, 'duration-literal.scedel');
        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);

        $constraint = $declaration->expr->constraints[0];
        self::assertInstanceOf(BinaryArithmeticExprNode::class, $constraint->arg->value);
        self::assertInstanceOf(DurationLiteralNode::class, $constraint->arg->value->right);
        self::assertSame('1h', $constraint->arg->value->right->raw);
        self::assertSame(3600000, $constraint->arg->value->right->milliseconds);
    }
}
