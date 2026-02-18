<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class DictTypeNode implements TypeExprNode
{
    public function __construct(
        public TypeExprNode $keyType,
        public TypeExprNode $valueType,
    ) {
    }
}
