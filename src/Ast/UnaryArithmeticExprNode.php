<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class UnaryArithmeticExprNode implements ExpressionNode
{
    public function __construct(
        public UnaryArithmeticOperator $operator,
        public ExpressionNode $operand,
    ) {
    }
}
