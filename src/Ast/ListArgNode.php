<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ListArgNode implements ArgValueNode
{
    /**
     * @param ExpressionNode[] $items
     */
    public function __construct(public array $items)
    {
    }
}
