<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class TargetedAnnotationNode
{
    public function __construct(
        public AnnotationNode $annotation,
        public AnnotationTargetNode $target,
    ) {
    }
}
