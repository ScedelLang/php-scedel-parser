<?php

declare(strict_types=1);

namespace Scedel\Parser;

use RuntimeException;
use Scedel\ErrorCategory;
use Scedel\ErrorCode;
use Throwable;

final class ParseException extends RuntimeException
{
    public function __construct(
        string $message,
        private readonly ?int $lineNumber = null,
        private readonly ?int $columnNumber = null,
        public readonly ?string $sourceName = null,
        public readonly ?string $offendingToken = null,
        ErrorCode|string $errorCode = ErrorCode::InvalidExpression,
        ErrorCategory|string $category = ErrorCategory::ParseError,
        ?Throwable $previous = null,
    ) {
        $this->errorCode = ErrorCode::coerce($errorCode);
        $this->category = ErrorCategory::coerce($category);
        parent::__construct($message, 0, $previous);
    }

    public readonly ErrorCode $errorCode;
    public readonly ErrorCategory $category;

    public function __get(string $name): mixed
    {
        return match ($name) {
            'line' => $this->lineNumber,
            'column' => $this->columnNumber,
            default => null,
        };
    }

    public function getParseLine(): ?int
    {
        return $this->lineNumber;
    }

    public function getParseColumn(): ?int
    {
        return $this->columnNumber;
    }
}
