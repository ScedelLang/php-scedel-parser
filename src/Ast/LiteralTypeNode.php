<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class LiteralTypeNode implements TypeExprNode
{
    public function __construct(public LiteralNode $literal)
    {
    }
}
