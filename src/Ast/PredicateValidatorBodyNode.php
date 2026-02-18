<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class PredicateValidatorBodyNode implements ValidatorBodyNode
{
    public function __construct(public PredicateNode $predicate)
    {
    }
}
