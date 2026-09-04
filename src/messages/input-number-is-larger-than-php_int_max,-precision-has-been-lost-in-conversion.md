# Input number is larger than PHP_INT_MAX, precision has been lost in conversion

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/input-number-is-larger-than-php_int_max,-precision-has-been-lost-in-conversion.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/input-number-is-larger-than-php_int_max,-precision-has-been-lost-in-conversion.html","name":"Input number is larger than PHP_INT_MAX, precision has been lost in conversion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:35:27+00:00","dateModified":"2026-09-04T14:35:27+00:00","description":"``bindec()``, ``octdec()``, ``hexdec()`` and ``base_convert()`` all share the same internal conversion routine, which accumulates the result in a ``zend_long`` for as long as it fits, then switches to a ``double`` once the value would overflow","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/input-number-is-larger-than-php_int_max,-precision-has-been-lost-in-conversion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`bindec()`, `octdec()`, `hexdec()` and `base_convert()` all share the same internal conversion routine, which accumulates the result in a `zend_long` for as long as it fits, then switches to a `double` once the value would overflow. Once that switch happens, the number is only an approximation: a `double` only has 53 bits of mantissa, so digits beyond that are rounded away.

PHP 8.6 emits a notice the moment this switch occurs, to make the precision loss visible instead of silently returning an inexact float.

## Example

```php
<?php

echo hexdec('FFFFFFFFFFFFFFFF');

?>
```

## Literal Examples
+ Input number is larger than PHP_INT_MAX, precision has been lost in conversion

## Alternatives
+ Use the GMP or BCMath extensions to convert arbitrarily large numbers between bases without losing precision.
+ Validate the input length against the base before conversion, so it is guaranteed to fit in a native integer.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, bindec(), octdec(), hexdec() and base_convert() silently returned a float once the number no longer fit in an integer, without any indication that precision had been lost. As of PHP 8.6, this now emits an E_NOTICE.](Previously, bindec(), octdec(), hexdec() and base_convert() silently returned a float once the number no longer fit in an integer, without any indication that precision had been lost. As of PHP 8.6, this now emits an E_NOTICE.)