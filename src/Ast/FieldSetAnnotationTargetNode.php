<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class FieldSetAnnotationTargetNode implements AnnotationTargetNode
{
    /**
     * @param string[] $fieldNames
     */
    public function __construct(
        public string $typeName,
        public array $fieldNames,
    ) {
    }
}
