<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class MatchesPredicateNode implements PredicateNode
{
    public function __construct(
        public ExpressionNode $expression,
        public string $regexPattern,
    ) {
    }
}
