# syntax error, unexpected token "*"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-*.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-*.html","name":"syntax error, unexpected token \"*\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"PHP accepts one star ``*``, for multiplication and two stars ``**``, for power, since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-*.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP accepts one star `*`, for multiplication and two stars `**`, for power, since PHP 7.0. More stars are not supported as operator.

## Example

```php
<?php

// star cannot be used directly after a +
$a = 2 + * 3;

// No such operator as 3 stars
$a = 2 *** 3;

?>
```

## Alternatives
+ Remove the previous operator, before the star.
+ Finish the previous operation, before the star.
+ Remove the superfluous star.

## Related error messages
+ [syntax-error,-unexpected-token-"%"](syntax-error,-unexpected-token-%.html)
