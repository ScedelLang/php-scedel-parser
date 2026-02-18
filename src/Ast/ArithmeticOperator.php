<?php

declare(strict_types=1);

namespace Scedel\Ast;

enum ArithmeticOperator: string
{
    case ADD = '+';
    case SUBTRACT = '-';
    case MULTIPLY = '*';
    case DIVIDE = '/';
}
