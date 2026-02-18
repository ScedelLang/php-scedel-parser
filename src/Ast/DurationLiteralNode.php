<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class DurationLiteralNode implements LiteralNode
{
    public function __construct(
        public string $raw,
        public int $milliseconds,
    ) {
    }
}
