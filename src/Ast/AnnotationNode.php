<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class AnnotationNode
{
    /**
     * @param string[] $keyParts
     */
    public function __construct(
        public array $keyParts,
        public string $value,
    ) {
    }
}
