<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class FieldNode
{
    /**
     * @param AnnotationNode[] $annotations
     */
    public function __construct(
        public string $name,
        public bool $optional,
        public TypeExprNode $type,
        public ?DefaultExprNode $default,
        public array $annotations = [],
    ) {
    }
}
