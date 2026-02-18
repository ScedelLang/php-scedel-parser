<?php

declare(strict_types=1);

namespace Scedel\Tests\Parser;

use PHPUnit\Framework\TestCase;
use Scedel\ErrorCategory;
use Scedel\Parser\ParseException;
use Scedel\Parser\ParserService;

final class ErrorTest extends TestCase
{
    public function testSyntaxErrorThrowsParseExceptionWithLocationMetadata(): void
    {
        $source = <<<'SCED'
        type Broken = {
            id: String
        SCED;

        $service = new ParserService();

        try {
            $service->parseString($source, 'broken.scedel');
            self::fail('ParseException was expected but parsing succeeded.');
        } catch (ParseException $exception) {
            self::assertSame('broken.scedel', $exception->sourceName);
            self::assertNotNull($exception->line);
            self::assertNotNull($exception->column);
            self::assertGreaterThan(0, $exception->line);
            self::assertGreaterThanOrEqual(0, $exception->column);
            self::assertSame(ErrorCategory::ParseError, $exception->category);
            self::assertNotSame('', $exception->errorCode->value);
        }
    }

    public function testTypeWithoutBodyIsRejected(): void
    {
        $source = <<<'SCED'
        type BareType
        SCED;

        $service = new ParserService();

        $this->expectException(ParseException::class);
        $this->expectExceptionMessage("expecting '='");

        $service->parseString($source, 'bare-type.scedel');
    }
}
