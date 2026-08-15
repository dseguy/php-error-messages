# syntax error, unexpected token "use", expecting "," or ";"

## Description
The previous `use` command was not properly finished with a semi-colon.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"use\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"use\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"use\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The previous ``use`` command was not properly finished with a semi-colon","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"use\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

use A as B
use C as D;

?>
```

## Alternatives
+ Add another ``use`` case, with a comma, and then finish the instruction with ``;``.
+ Finish the previous ``use`` case, with a semi colon ``;``.
+ Remove the next ``use`` keyword, and replace it with a comma.

## Related error messages
+ [syntax-error,-unexpected-token-"use"](syntax-error,-unexpected-token-use.html)
