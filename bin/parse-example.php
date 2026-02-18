#!/usr/bin/env php
<?php

declare(strict_types=1);

use Scedel\Ast\TypeDeclarationNode;
use Scedel\Ast\ValidatorDeclarationNode;
use Scedel\Ast\AnnotatedDeclarationNode;
use Scedel\Parser\ParseException;
use Scedel\Parser\ParserService;

require dirname(__DIR__) . '/vendor/autoload.php';

$examplePath = dirname(__DIR__) . '/example.scedel';
if (!is_file($examplePath)) {
    $examplePath = dirname(__DIR__, 2) . '/example.scedel';
}
$parser = new ParserService();

try {
    $ast = $parser->parseFile($examplePath);
} catch (ParseException $exception) {
    fwrite(STDERR, sprintf(
        "Parse error in %s at %s:%s: %s\n",
        $exception->sourceName ?? $examplePath,
        $exception->line ?? '?',
        $exception->column ?? '?',
        $exception->getMessage(),
    ));
    exit(1);
}

$typeDeclarations = [];
$validatorDeclarations = [];

foreach ($ast->statements as $statement) {
    if (!$statement instanceof AnnotatedDeclarationNode) {
        continue;
    }

    if ($statement->declaration instanceof TypeDeclarationNode) {
        $typeDeclarations[] = $statement->declaration;
        continue;
    }

    if ($statement->declaration instanceof ValidatorDeclarationNode) {
        $validatorDeclarations[] = $statement->declaration;
    }
}

printf("Includes: %d\n", count($ast->includes));
printf("Statements: %d\n", count($ast->statements));
printf("Type declarations: %d\n", count($typeDeclarations));
printf("Validator declarations: %d\n", count($validatorDeclarations));

if ($typeDeclarations !== []) {
    echo "Types:\n";
    foreach ($typeDeclarations as $declaration) {
        printf("  - %s\n", $declaration->name);
    }
}

if ($validatorDeclarations !== []) {
    echo "Validators:\n";
    foreach ($validatorDeclarations as $declaration) {
        printf("  - %s(%s)\n", $declaration->targetType, $declaration->name);
    }
}
