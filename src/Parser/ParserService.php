<?php

declare(strict_types=1);

namespace Scedel\Parser;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\InputStream;
use Scedel\Ast\FileNode;
use Scedel\Generated\ScedelLexer;
use Scedel\Generated\ScedelParser;

final class ParserService
{
    public const array SUPPORTED_RFC_VERSIONS = ['0.14.2'];

    public function parseFile(string $path): FileNode
    {
        $source = @file_get_contents($path);
        if ($source === false) {
            throw new ParseException(sprintf('Unable to read file: %s', $path), sourceName: $path);
        }

        return $this->parseString($source, $path);
    }

    public function parseString(string $source, ?string $sourceName = null): FileNode
    {
        $input = $this->createInputStream($source);
        if ($sourceName !== null) {
            $input->name = $sourceName;
        }

        $lexer = new ScedelLexer($input);
        $tokens = new CommonTokenStream($lexer);
        $parser = new ScedelParser($tokens);

        $lexer->removeErrorListeners();
        $parser->removeErrorListeners();

        $errorListener = new ThrowingErrorListener($sourceName);
        $lexer->addErrorListener($errorListener);
        $parser->addErrorListener($errorListener);

        $tree = $parser->file();

        $builder = new AstBuilderVisitor();
        $result = $builder->visit($tree);

        if (!$result instanceof FileNode) {
            throw new ParseException('Unexpected parser result type', sourceName: $sourceName);
        }

        return $result;
    }

    private function createInputStream(string $source)
    {
        return InputStream::fromString($source);
    }
}
