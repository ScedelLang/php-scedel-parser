<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ValidatorParamNode
{
    public function __construct(
        public string $name,
        public ?string $typeHint,
        public ?ExpressionNode $default,
    ) {
    }
}
