<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class FileNode
{
    /**
     * @param IncludeNode[] $includes
     * @param array<int, AnnotatedDeclarationNode|TargetedAnnotationNode> $statements
     */
    public function __construct(
        public ?SchemaVersionNode $version,
        public array $includes,
        public array $statements,
    ) {
    }
}
