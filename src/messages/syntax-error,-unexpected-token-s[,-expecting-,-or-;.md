# syntax error, unexpected token "#[", expecting "," or ";"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\",\"-or-\";\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\",\"-or-\";\".html","name":"syntax error, unexpected token \"#[\", expecting \",\" or \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The ``#[`` token marks the beginning of an attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\",\"-or-\";\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `#[` token marks the beginning of an attribute. The previous statement is either not finished with a semi-colon, or could be extended with another set of code and then finished with a semi-colon.

## Example

```php
<?php

// missing ; or , 
use A as B

#[MyAttribute]
class X {}

?>
```

## Alternatives
+ Finish the previous ``use`` statement, with a semi-colon.
+ Complete the previous ``use`` statement, and finish it with a semi-colon.
