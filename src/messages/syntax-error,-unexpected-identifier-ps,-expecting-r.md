# syntax error, unexpected identifier "%s", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\")\".html","name":"syntax error, unexpected identifier \"%s\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error appears an argument is already a complete expression, yet a new identifier appears after it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears an argument is already a complete expression, yet a new identifier appears after it. Within a method call, this could have been the end of the call itself, or an expression error.

## Example

```php
<?php

foo(a: 1 b: 2);

foo(a: 1 c);

?>
```

## Literal Examples
+ syntax error, unexpected identifier "b", expecting ")"

## Alternatives
+ Add the missing comma between the arguments.
+ Add the missing operator to build a full expression. There may be many ways to make the expression valid.
+ Close the function call with a closing parenthesis, and start a new expression after it.
