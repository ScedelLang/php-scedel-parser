<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class FunctionCallExprNode implements ExpressionNode
{
    /**
     * @param ExpressionNode[] $args
     */
    public function __construct(
        public string $name,
        public array $args,
    ) {
    }
}
