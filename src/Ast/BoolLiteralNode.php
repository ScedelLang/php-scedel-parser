<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class BoolLiteralNode implements LiteralNode
{
    public function __construct(public bool $value)
    {
    }
}
