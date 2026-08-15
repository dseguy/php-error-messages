# Negative power of zero

## Description
It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined. 

It was a silent error until PHP 8.4, and it is now a visible one.

This is also the case with PHP native `**` and pow().
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/negative-power-of-zero.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/negative-power-of-zero.html","name":"Negative power of zero","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to calculate a negative power of 0: a negative power is, in fact, a division raised to a power, and division by zero is undefined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/negative-power-of-zero.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

echo bcpow(0, -1); 

?>
```

## Alternatives
+ Check for the first argument not to be 0, or similar.
+ Catch the exception.

## Related error messages
+ [power-of-base-0-and-negative-exponent-is-deprecated](asdf)
