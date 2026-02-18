<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class RecordTypeNode implements TypeExprNode
{
    /**
     * @param FieldNode[] $fields
     */
    public function __construct(public array $fields)
    {
    }
}
