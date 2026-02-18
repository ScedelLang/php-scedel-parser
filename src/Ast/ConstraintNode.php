<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ConstraintNode
{
    /**
     * @param ConstraintCallArgNode[] $callArgs
     */
    public function __construct(
        public string $name,
        public bool $negated,
        public ?ArgValueNode $arg,
        public array $callArgs = [],
        public bool $usesCallSyntax = false,
    ) {
    }
}
