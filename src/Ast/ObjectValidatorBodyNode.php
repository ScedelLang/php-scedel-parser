<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ObjectValidatorBodyNode implements ValidatorBodyNode
{
    public function __construct(
        public RuleExprNode $rule,
        public string $message,
    ) {
    }
}
