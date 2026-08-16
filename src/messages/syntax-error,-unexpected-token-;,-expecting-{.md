# syntax error, unexpected token ";", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"{\".html","name":"syntax error, unexpected token \";\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Namespace accepts two syntaxes: the first one with an ending semi-colon, or a block, which starts with an opening curly bracket.

In the current case, there is another feature at play: the name of the namespace may be empty, to refer to the global namespace. In that case, either the `namespace` keyword is omitted, or a block is defined after the namespace.

## Example

```php
<?php

namespace ;
?>
```

## Alternatives
+ Remove the ``namespace ;`` entirely.
+ Add a block after the ``namespace``, and remove the semi-colon.
