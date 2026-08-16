# syntax error, unexpected token ";", expecting "]"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"]\".html","name":"syntax error, unexpected token \";\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A semi-colon was found after an opening square bracket","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A semi-colon was found after an opening square bracket. To keep the code balanced, PHP expects the bracket to be closed before finishing the instruction.

## Example

```php
<?php

[1,2; ];

$a[4;];

?>
```

## Alternatives
+ Remove the semi-colon.
+ Close the square bracket before the semi-colon.
