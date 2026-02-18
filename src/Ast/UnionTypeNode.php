<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class UnionTypeNode implements TypeExprNode
{
    /**
     * @param TypeExprNode[] $items
     */
    public function __construct(public array $items)
    {
    }
}
