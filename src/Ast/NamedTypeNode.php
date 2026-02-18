<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class NamedTypeNode implements TypeExprNode
{
    /**
     * @param ConstraintNode[] $constraints
     */
    public function __construct(
        public string $name,
        public array $constraints,
    ) {
    }
}
