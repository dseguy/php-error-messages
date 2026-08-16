# syntax error, unexpected token ";", expecting identifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-identifier.html","name":"syntax error, unexpected token \";\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The ``use`` instruction is not finished properly: ``as`` expects a name after it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `use` instruction is not finished properly: `as` expects a name after it.

## Example

```php
<?php

use A\B as ;

?>
```

## Alternatives
+ Finish the ``use`` + ``as`` with an alias name.
+ Remove the ``as`` to make a simple ``use`` instruction.
