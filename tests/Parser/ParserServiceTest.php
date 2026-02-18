<?php

declare(strict_types=1);

namespace Scedel\Tests\Parser;

use PHPUnit\Framework\TestCase;
use Scedel\ErrorCategory;
use Scedel\ErrorCode;
use Scedel\Ast\AbsentTypeNode;
use Scedel\Ast\AnnotatedDeclarationNode;
use Scedel\Ast\ArrayTypeNode;
use Scedel\Ast\ConditionalTypeNode;
use Scedel\Ast\DictTypeNode;
use Scedel\Ast\ExpressionDefaultExprNode;
use Scedel\Ast\FieldSetAnnotationTargetNode;
use Scedel\Ast\IntersectionTypeNode;
use Scedel\Ast\RecordTypeNode;
use Scedel\Ast\TargetedAnnotationNode;
use Scedel\Ast\TypeAnnotationTargetNode;
use Scedel\Ast\TypeDeclarationNode;
use Scedel\Ast\UnionTypeNode;
use Scedel\Parser\ParseException;
use Scedel\Ast\ValidatorDeclarationNode;
use Scedel\Parser\ParserService;

final class ParserServiceTest extends TestCase
{
    public function testParseExampleFileBuildsExpectedAstShape(): void
    {
        $service = new ParserService();
        $ast = $service->parseFile(dirname(__DIR__, 2) . '/example.scedel');

        self::assertNull($ast->version);
        self::assertCount(1, $ast->includes);
        self::assertSame('https://example.com/types.scedel', $ast->includes[0]->path);

        $typeDeclarations = [];
        $validatorDeclarations = [];
        $targetedAnnotations = [];

        foreach ($ast->statements as $statement) {
            if ($statement instanceof AnnotatedDeclarationNode) {
                if ($statement->declaration instanceof TypeDeclarationNode) {
                    $typeDeclarations[] = $statement->declaration;
                    continue;
                }

                if ($statement->declaration instanceof ValidatorDeclarationNode) {
                    $validatorDeclarations[] = $statement->declaration;
                }

                continue;
            }

            if ($statement instanceof TargetedAnnotationNode) {
                $targetedAnnotations[] = $statement;
            }
        }

        self::assertNotEmpty($typeDeclarations);
        self::assertNotEmpty($validatorDeclarations);
        self::assertCount(2, $targetedAnnotations);

        $validatorIndex = [];
        foreach ($validatorDeclarations as $declaration) {
            $validatorIndex[sprintf('%s:%s', $declaration->targetType, $declaration->name)] = $declaration;
        }

        self::assertArrayHasKey('String:noAds', $validatorIndex);
        self::assertArrayHasKey('String:noCaps', $validatorIndex);

        $typeIndex = [];
        foreach ($typeDeclarations as $declaration) {
            $typeIndex[$declaration->name] = $declaration;
        }

        self::assertArrayHasKey('PostStatus', $typeIndex);
        self::assertInstanceOf(UnionTypeNode::class, $typeIndex['PostStatus']->expr);

        self::assertArrayHasKey('PostWithStatus', $typeIndex);
        self::assertInstanceOf(IntersectionTypeNode::class, $typeIndex['PostWithStatus']->expr);

        self::assertArrayHasKey('Post', $typeIndex);
        $postType = $typeIndex['Post'];

        self::assertInstanceOf(RecordTypeNode::class, $postType->expr);
        $fieldIndex = [];
        foreach ($postType->expr->fields as $field) {
            $fieldIndex[$field->name] = $field;
        }

        self::assertArrayHasKey('rejectReason', $fieldIndex);
        self::assertInstanceOf(ConditionalTypeNode::class, $fieldIndex['rejectReason']->type);
        self::assertInstanceOf(AbsentTypeNode::class, $fieldIndex['rejectReason']->type->elseType);

        self::assertArrayHasKey('customVariables', $fieldIndex);
        self::assertInstanceOf(DictTypeNode::class, $fieldIndex['customVariables']->type);

        self::assertArrayHasKey('meta', $fieldIndex);
        self::assertInstanceOf(ArrayTypeNode::class, $fieldIndex['meta']->type);
        self::assertInstanceOf(ExpressionDefaultExprNode::class, $fieldIndex['meta']->default);

        self::assertArrayHasKey('internalNote', $fieldIndex);
        self::assertCount(1, $fieldIndex['internalNote']->annotations);

        self::assertInstanceOf(TypeAnnotationTargetNode::class, $targetedAnnotations[0]->target);
        self::assertInstanceOf(FieldSetAnnotationTargetNode::class, $targetedAnnotations[1]->target);
    }

    public function testVersionDirectiveIsParsed(): void
    {
        $source = <<<'SCED'
        scedel-version 1.2
        type Post = String
        SCED;

        $service = new ParserService();
        $ast = $service->parseString($source, 'versioned.scedel');

        self::assertNotNull($ast->version);
        self::assertSame(1, $ast->version->major);
        self::assertSame(2, $ast->version->minor);
        self::assertSame(0, $ast->version->patch);
    }

    public function testSoftKeywordsCanBeUsedAsFieldIdentifiers(): void
    {
        $source = <<<'SCED'
        type Example = {
            include: String
            type: String
            and: Bool
        }
        SCED;

        $ast = (new ParserService())->parseString($source, 'soft-keywords.scedel');

        /** @var AnnotatedDeclarationNode $statement */
        $statement = $ast->statements[0];
        $declaration = $statement->declaration;
        self::assertInstanceOf(TypeDeclarationNode::class, $declaration);
        self::assertInstanceOf(RecordTypeNode::class, $declaration->expr);

        $fieldNames = array_map(static fn ($field): string => $field->name, $declaration->expr->fields);
        self::assertSame(['include', 'type', 'and'], $fieldNames);
    }

    public function testVersionDirectiveMustBeFirstStatement(): void
    {
        $source = <<<'SCED'
        include "defs.scedel"
        scedel-version 1.2
        type Post = String
        SCED;

        try {
            (new ParserService())->parseString($source, 'version-order.scedel');
            self::fail('Expected ParseException for non-leading version directive.');
        } catch (ParseException $exception) {
            self::assertSame(ErrorCode::InvalidExpression, $exception->errorCode);
            self::assertSame(ErrorCategory::ParseError, $exception->category);
        }
    }

    public function testIdentifierMustNotStartWithDigit(): void
    {
        $source = <<<'SCED'
        type Root = {
            1field: String
        }
        SCED;

        $this->expectException(ParseException::class);
        (new ParserService())->parseString($source, 'invalid-identifier.scedel');
    }

    public function testParserDeclaresSupportedRfcVersion(): void
    {
        self::assertContains('0.14.2', ParserService::SUPPORTED_RFC_VERSIONS);
    }
}
