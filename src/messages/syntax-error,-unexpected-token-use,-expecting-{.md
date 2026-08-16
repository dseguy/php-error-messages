# syntax error, unexpected token "use", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"use\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"use\",-expecting-\"{\".html","name":"syntax error, unexpected token \"use\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"The ``namespace`` command was now finished properly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"use\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `namespace` command was now finished properly. It could be finished with a semi-colon `;`, and `use` would be the next instruction. Or it could go be followed by a block of definition, that starts with an open curly bracket.

## Example

```php
<?php

namespace A\B\C

use D\E;

?>
```

## Alternatives
+ Finish the ``namespace`` with a semi colon.
+ Add a block to the ``namespace``, that encompass the ``use`` instruction.
