<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ConditionalTypeNode implements TypeExprNode
{
    public function __construct(
        public PredicateNode $condition,
        public TypeExprNode $thenType,
        public TypeExprNode $elseType,
    ) {
    }
}
