<?php

declare(strict_types=1);

namespace Scedel\Ast;

final readonly class SchemaVersionNode
{
    public function __construct(
        public int $major,
        public int $minor,
        public int $patch = 0,
    ) {
    }

    public function asString(): string
    {
        return sprintf('%d.%d.%d', $this->major, $this->minor, $this->patch);
    }
}
