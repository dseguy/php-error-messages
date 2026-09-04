# must be between 1 and %lu

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-between-1-and-plu.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-between-1-and-plu.html","name":"must be between 1 and %lu","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``gmp_root()`` and ``gmp_rootrem()`` compute the integer part of the ``$nth`` root of ``$num``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-between-1-and-plu.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`gmp_root()` and `gmp_rootrem()` compute the integer part of the `$nth` root of `$num`. Internally, `$nth` is passed to GMP as an unsigned long, so it must be at least 1 and cannot exceed the platform's `ULONG_MAX`.

As of PHP 8.6, an `$nth` outside this range throws a `ValueError` naming the exact upper bound, instead of only rejecting non-positive values and letting an oversized `$nth` overflow when narrowed to an unsigned long.

## Example

```php
<?php

gmp_root('27', PHP_INT_MAX);

?>
```

## Literal Examples
+ gmp_root(): Argument #2 ($nth) must be between 1 and 18446744073709551615
+ gmp_rootrem(): Argument #2 ($nth) must be between 1 and 18446744073709551615

## Alternatives
+ Pass an $nth argument to gmp_root()/gmp_rootrem() between 1 and PHP_INT_MAX (or the platform's ULONG_MAX, whichever is smaller).

## Related error messages
+ [must-be-odd-if-argument-#1-($num)-is-negative](must-be-odd-if-argument-#1-\($num\)-is-negative.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, gmp_root() rejected only $nth <= 0 ("must be greater than 0") and gmp_rootrem() rejected only $nth < 1 ("must be greater than or equal to 1"), without an upper bound.](Previously, gmp_root() rejected only $nth <= 0 ("must be greater than 0") and gmp_rootrem() rejected only $nth < 1 ("must be greater than or equal to 1"), without an upper bound.)