# scedel/parser

<img src="https://raw.githubusercontent.com/ScedelLang/grammar/5f1e7572f328d657c726a2fcaeaf53d9f6863d6a/logo.svg" width="250px" alt="logo" />

Parser and typed AST implementation for Scedel in PHP.

## RFC support

- [Target RFC: `0.14.2`](https://github.com/ScedelLang/grammar/blob/main/RFC-Scedel-0.14.2.md)

## API

```php
use Scedel\Parser\ParserService;

$parser = new ParserService();
$ast = $parser->parseString($source, 'inline.scedel');
```

## CLI

```bash
php php/scedel-parser/bin/parse-example.php
php php/scedel-parser/bin/parse-example.php /absolute/path/schema.scedel
```
