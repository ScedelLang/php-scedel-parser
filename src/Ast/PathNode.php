<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class PathNode implements ExpressionNode
{
    /**
     * @param string[] $segments
     */
    public function __construct(
        public PathRootKind $rootKind,
        public ?string $rootName,
        public array $segments,
    ) {
    }
}
