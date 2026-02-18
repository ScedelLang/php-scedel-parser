<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class IntersectionTypeNode implements TypeExprNode
{
    /**
     * @param TypeExprNode[] $items
     */
    public function __construct(public array $items)
    {
    }
}
