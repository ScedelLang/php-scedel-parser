<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class NumberLiteralNode implements LiteralNode
{
    public function __construct(
        public string $raw,
        public int|float $numericValue,
    ) {
    }
}
