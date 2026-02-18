<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class AnnotatedDeclarationNode
{
    /**
     * @param AnnotationNode[] $annotations
     */
    public function __construct(
        public array $annotations,
        public DeclarationNode $declaration,
    ) {
    }
}
