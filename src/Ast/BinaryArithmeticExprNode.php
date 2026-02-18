<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class BinaryArithmeticExprNode implements ExpressionNode
{
    public function __construct(
        public ArithmeticOperator $operator,
        public ExpressionNode $left,
        public ExpressionNode $right,
    ) {
    }
}
