# Power of base 0 and negative exponent is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/power-of-base-0-and-negative-exponent-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/power-of-base-0-and-negative-exponent-is-deprecated.html","name":"Power of base 0 and negative exponent is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-06T18:30:06+02:00","dateModified":"2025-02-22T09:04:39-05:00","description":"Requesting a negative exponent on 0 yields this error message","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/power-of-base-0-and-negative-exponent-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Requesting a negative exponent on 0 yields this error message. While PHP 8.3- used to generate INF as result, PHP 8.4 is moving toward generating a DivisionByZeroError: this will be set in PHP 9.0.

## Example

```php
<?php

$x = 0;

$y = $x ** -2;

?>
```

## Alternatives
+ Check for 0 before raising a negative power. Positive powers are OK.
+ Check for negative power before raising a power of 0.
+ Use the PHP 8.4 function fpow() that has the future behavior, with a try/catch structure.

## Related error messages
+ [negative-power-of-zero](negative-power-of-zero.html)
