<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class LiteralDefaultExprNode implements DefaultExprNode
{
    public function __construct(public LiteralNode $literal)
    {
    }
}
