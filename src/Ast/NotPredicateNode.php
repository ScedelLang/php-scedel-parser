<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class NotPredicateNode implements PredicateNode
{
    public function __construct(public ExpressionNode $inner)
    {
    }
}
