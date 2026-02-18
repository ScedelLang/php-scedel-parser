<?php

declare(strict_types=1);

namespace Scedel\Tests\Parser;

use PHPUnit\Framework\TestCase;
use Scedel\Ast\AnnotatedDeclarationNode;
use Scedel\Ast\FunctionCallExprNode;
use Scedel\Ast\ListArgNode;
use Scedel\Ast\NamedTypeNode;
use Scedel\Ast\PathNode;
use Scedel\Ast\PathRootKind;
use Scedel\Ast\SingleArgNode;
use Scedel\Ast\StringLiteralNode;
use Scedel\Ast\TypeDeclarationNode;
use Scedel\Parser\ParserService;

final class ConstraintTest extends TestCase
{
    public function testConstraintArgumentVariantsAreBuiltIntoAst(): void
    {
        $source = <<<'SCED'
        type Sample = String(first:not this.value, second:["a", root.item, 5], third:10)
        SCED;

        $service = new ParserService();
        $ast = $service->parseString($source, 'constraint-test.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(NamedTypeNode::class, $declaration->expr);

        self::assertCount(3, $declaration->expr->constraints);

        $first = $declaration->expr->constraints[0];
        self::assertTrue($first->negated);
        self::assertInstanceOf(SingleArgNode::class, $first->arg);
        self::assertInstanceOf(PathNode::class, $first->arg->value);
        self::assertSame(PathRootKind::THIS, $first->arg->value->rootKind);
        self::assertSame(['value'], $first->arg->value->segments);

        $second = $declaration->expr->constraints[1];
        self::assertInstanceOf(ListArgNode::class, $second->arg);
        self::assertCount(3, $second->arg->items);
        self::assertInstanceOf(StringLiteralNode::class, $second->arg->items[0]);
        self::assertInstanceOf(PathNode::class, $second->arg->items[1]);
        self::assertSame(PathRootKind::ROOT, $second->arg->items[1]->rootKind);

        $third = $declaration->expr->constraints[2];
        self::assertInstanceOf(SingleArgNode::class, $third->arg);
    }

    public function testConstraintArgumentsSupportParentAndFunctionCalls(): void
    {
        $source = <<<'SCED'
        type Sample = DateTime(min: parent.startedAt, max: now(), choice: [pi(), $limit, parent.boundary])
        SCED;

        $service = new ParserService();
        $ast = $service->parseString($source, 'constraint-expression-test.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(NamedTypeNode::class, $declaration->expr);

        $min = $declaration->expr->constraints[0];
        self::assertInstanceOf(SingleArgNode::class, $min->arg);
        self::assertInstanceOf(PathNode::class, $min->arg->value);
        self::assertSame(PathRootKind::PARENT, $min->arg->value->rootKind);
        self::assertSame(['startedAt'], $min->arg->value->segments);

        $max = $declaration->expr->constraints[1];
        self::assertInstanceOf(SingleArgNode::class, $max->arg);
        self::assertInstanceOf(FunctionCallExprNode::class, $max->arg->value);
        self::assertSame('now', $max->arg->value->name);
        self::assertCount(0, $max->arg->value->args);

        $choice = $declaration->expr->constraints[2];
        self::assertInstanceOf(ListArgNode::class, $choice->arg);
        self::assertCount(3, $choice->arg->items);
        self::assertInstanceOf(FunctionCallExprNode::class, $choice->arg->items[0]);
        self::assertSame('pi', $choice->arg->items[0]->name);
        self::assertInstanceOf(PathNode::class, $choice->arg->items[1]);
        self::assertSame(PathRootKind::VARIABLE, $choice->arg->items[1]->rootKind);
        self::assertSame('$limit', $choice->arg->items[1]->rootName);
        self::assertInstanceOf(PathNode::class, $choice->arg->items[2]);
        self::assertSame(PathRootKind::PARENT, $choice->arg->items[2]->rootKind);
    }

    public function testConstraintCallSyntaxSupportsPositionalAndNamedArguments(): void
    {
        $source = <<<'SCED'
        validator Int(range, from:Int = 0, to:Int = 100) = this > $from and this < $to
        type Sample = Int(range(10, to:20))
        SCED;

        $service = new ParserService();
        $ast = $service->parseString($source, 'constraint-call-style.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[1];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(NamedTypeNode::class, $declaration->expr);

        $range = $declaration->expr->constraints[0];
        self::assertTrue($range->usesCallSyntax);
        self::assertCount(2, $range->callArgs);
        self::assertNull($range->callArgs[0]->name);
        self::assertSame('to', $range->callArgs[1]->name);
    }
}
