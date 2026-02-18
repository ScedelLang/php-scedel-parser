<?php

declare(strict_types=1);

namespace Scedel\Ast;

enum CompareOperator: string
{
    case EQUAL = '=';
    case NOT_EQUAL = '!=';
    case LESS = '<';
    case LESS_OR_EQUAL = '<=';
    case MORE = '>';
    case MORE_OR_EQUAL = '>=';
}
