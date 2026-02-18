<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class FieldPathAnnotationTargetNode implements AnnotationTargetNode
{
    /**
     * @param string[] $path
     */
    public function __construct(
        public string $typeName,
        public array $path,
    ) {
    }
}
