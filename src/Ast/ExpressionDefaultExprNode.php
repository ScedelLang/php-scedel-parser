<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ExpressionDefaultExprNode implements DefaultExprNode
{
    public function __construct(public ExpressionNode $expression)
    {
    }
}
