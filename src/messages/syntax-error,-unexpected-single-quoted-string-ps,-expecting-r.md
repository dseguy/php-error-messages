# syntax error, unexpected single quoted string "%s", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-single-quoted-string-\"%s\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-single-quoted-string-\"%s\",-expecting-\")\".html","name":"syntax error, unexpected single quoted string \"%s\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"After an identifier, such as ``name``, there can only be a delimiter, such as ``(``, ``[``, or ``:`` but not a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-single-quoted-string-\"%s\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
After an identifier, such as `name`, there can only be a delimiter, such as `(`, `[`, or `:` but not a string.

## Example

```php
<?php

foo(name 'A');

?>
```

## Literal Examples
+ syntax-error,-unexpected-single-quoted-string-"A",-expecting-")"

## Alternatives
+ Add a colon between ``name`` and ``'A'``, to make a named parameter.
+ Add parenthesis  after ``name`` and around ``'A'``, to make a function call.
+ Add square brackets  after ``name`` and around ``'A'``, to make a array call.
