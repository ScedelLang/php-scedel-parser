<?php

declare(strict_types=1);

namespace Scedel\Ast;

enum PathRootKind: string
{
    case THIS = 'this';
    case PARENT = 'parent';
    case ROOT = 'root';
    case VARIABLE = 'variable';
    case IDENTIFIER = 'identifier';
}
