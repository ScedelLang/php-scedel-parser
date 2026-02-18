<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class NullableTypeNode implements TypeExprNode
{
    public function __construct(public TypeExprNode $innerType)
    {
    }
}
