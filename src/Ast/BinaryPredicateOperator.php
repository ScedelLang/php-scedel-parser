<?php

declare(strict_types=1);

namespace Scedel\Ast;

enum BinaryPredicateOperator: string
{
    case AND = 'and';
    case OR = 'or';
}
