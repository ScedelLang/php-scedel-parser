<?php

declare(strict_types=1);

namespace Scedel;

enum ErrorCategory: string
{
    case ParseError = 'ParseError';
    case SemanticError = 'SemanticError';
    case IncludeResolutionError = 'IncludeResolutionError';
    case TypeError = 'TypeError';
    case ValidationError = 'ValidationError';

    public static function coerce(self|string $value): self
    {
        return $value instanceof self ? $value : self::from($value);
    }
}
