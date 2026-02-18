<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class RegexRuleExprNode implements RuleExprNode
{
    public function __construct(
        public string $pattern,
        public bool $negated,
    ) {
    }
}
