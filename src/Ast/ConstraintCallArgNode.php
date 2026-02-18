<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ConstraintCallArgNode
{
    public function __construct(
        public ?string $name,
        public ExpressionNode $value,
    ) {
    }
}
