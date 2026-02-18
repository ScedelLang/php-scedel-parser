<?php

declare(strict_types=1);

namespace Scedel\Tests\Parser;

use PHPUnit\Framework\TestCase;
use Scedel\Ast\AnnotatedDeclarationNode;
use Scedel\Ast\BinaryPredicateNode;
use Scedel\Ast\BinaryPredicateOperator;
use Scedel\Ast\ComparePredicateNode;
use Scedel\Ast\ConditionalTypeNode;
use Scedel\Ast\FunctionCallExprNode;
use Scedel\Ast\NotPredicateNode;
use Scedel\Ast\PathNode;
use Scedel\Ast\TypeDeclarationNode;
use Scedel\Parser\ParserService;

final class PredicateTest extends TestCase
{
    public function testComplexPredicatePreservesBinaryAndNotStructure(): void
    {
        $source = <<<'SCED'
        type Check = when not (this.left = 1 and root.right = 2) or this.flag != false then String else Null
        SCED;

        $service = new ParserService();
        $ast = $service->parseString($source, 'predicate-test.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(ConditionalTypeNode::class, $declaration->expr);

        $condition = $declaration->expr->condition;
        self::assertInstanceOf(BinaryPredicateNode::class, $condition);
        self::assertSame(BinaryPredicateOperator::OR, $condition->operator);

        self::assertInstanceOf(NotPredicateNode::class, $condition->left);
        self::assertInstanceOf(BinaryPredicateNode::class, $condition->left->inner);
        self::assertSame(BinaryPredicateOperator::AND, $condition->left->inner->operator);

        self::assertInstanceOf(ComparePredicateNode::class, $condition->right);
        self::assertInstanceOf(PathNode::class, $condition->right->left);
        self::assertSame('flag', $condition->right->left->segments[0]);
    }

    public function testPredicateSupportsPathAndFunctionAsComparisonOperands(): void
    {
        $source = <<<'SCED'
        type Check = when this.startsAt <= parent.limit and this.endsAt >= now() and this.label = "abc" then String else Null
        SCED;

        $service = new ParserService();
        $ast = $service->parseString($source, 'predicate-operands-test.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(ConditionalTypeNode::class, $declaration->expr);

        $condition = $declaration->expr->condition;
        self::assertInstanceOf(BinaryPredicateNode::class, $condition);
        self::assertSame(BinaryPredicateOperator::AND, $condition->operator);

        self::assertInstanceOf(BinaryPredicateNode::class, $condition->left);
        self::assertSame(BinaryPredicateOperator::AND, $condition->left->operator);

        self::assertInstanceOf(ComparePredicateNode::class, $condition->left->left);
        self::assertInstanceOf(PathNode::class, $condition->left->left->right);

        self::assertInstanceOf(ComparePredicateNode::class, $condition->left->right);
        self::assertInstanceOf(FunctionCallExprNode::class, $condition->left->right->right);
        self::assertSame('now', $condition->left->right->right->name);

        self::assertInstanceOf(ComparePredicateNode::class, $condition->right);
        self::assertInstanceOf(PathNode::class, $condition->right->left);
    }
}
