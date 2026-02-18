<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class PredicateRuleExprNode implements RuleExprNode
{
    public function __construct(public PredicateNode $predicate)
    {
    }
}
