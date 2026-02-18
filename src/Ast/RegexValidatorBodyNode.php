<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class RegexValidatorBodyNode implements ValidatorBodyNode
{
    public function __construct(
        public string $pattern,
        public bool $negated,
    ) {
    }
}
