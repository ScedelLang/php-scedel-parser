<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ComparePredicateNode implements PredicateNode
{
    public function __construct(
        public ExpressionNode $left,
        public CompareOperator $operator,
        public ExpressionNode $right,
    ) {
    }
}
