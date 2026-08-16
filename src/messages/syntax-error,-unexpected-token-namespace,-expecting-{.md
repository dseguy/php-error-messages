# syntax error, unexpected token "namespace", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"namespace\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"namespace\",-expecting-\"{\".html","name":"syntax error, unexpected token \"namespace\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"The ``namespace`` token is one of the first to be used in a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"namespace\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `namespace` token is one of the first to be used in a script. There is little other command that can be used outside a namespace.

## Example

```php
<?php

namespace A

namespace B;

?>
```

## Alternatives
+ Check the previous namespace command, and its final semi colon.
+ Check the previous namespace command, and its associated block.
