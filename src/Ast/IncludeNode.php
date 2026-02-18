<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class IncludeNode
{
    public function __construct(public string $path)
    {
    }
}
