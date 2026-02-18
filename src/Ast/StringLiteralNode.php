<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class StringLiteralNode implements LiteralNode
{
    public function __construct(public string $value)
    {
    }
}
