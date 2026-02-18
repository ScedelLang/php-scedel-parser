<?php

declare(strict_types=1);

namespace Scedel\Parser;

use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Recognizer;

final class ThrowingErrorListener extends BaseErrorListener
{
    public function __construct(private readonly ?string $sourceName)
    {
    }

    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $e,
    ): void {
        $offendingToken = null;

        if ($offendingSymbol !== null && method_exists($offendingSymbol, 'getText')) {
            $text = $offendingSymbol->getText();
            $offendingToken = is_string($text) ? $text : null;
        }

        throw new ParseException(
            $msg,
            $line,
            $charPositionInLine,
            sourceName: $this->sourceName,
            offendingToken: $offendingToken,
            previous: $e,
        );
    }
}
