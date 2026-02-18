<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class ValidatorDeclarationNode implements DeclarationNode
{
    /**
     * @param ValidatorParamNode[] $params
     */
    public function __construct(
        public string $targetType,
        public string $name,
        public array $params,
        public ValidatorBodyNode $body,
    ) {
    }
}
