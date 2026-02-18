<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class SingleArgNode implements ArgValueNode
{
    public function __construct(public ExpressionNode $value)
    {
    }
}
