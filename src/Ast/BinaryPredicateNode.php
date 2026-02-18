<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class BinaryPredicateNode implements PredicateNode
{
    public function __construct(
        public BinaryPredicateOperator $operator,
        public ExpressionNode $left,
        public ExpressionNode $right,
    ) {
    }
}
