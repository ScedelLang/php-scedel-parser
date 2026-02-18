<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ArrayTypeNode implements TypeExprNode
{
    /**
     * @param ConstraintNode[] $constraints
     */
    public function __construct(
        public TypeExprNode $itemType,
        public array $constraints,
    ) {
    }
}
