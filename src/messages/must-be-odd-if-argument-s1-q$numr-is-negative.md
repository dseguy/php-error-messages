# must be odd if argument #1 ($num) is negative

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-odd-if-argument-s1-q$numr-is-negative.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-odd-if-argument-s1-q$numr-is-negative.html","name":"must be odd if argument #1 ($num) is negative","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``gmp_root()`` and ``gmp_rootrem()`` compute the integer part of the ``$nth`` root of ``$num``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-odd-if-argument-s1-q$numr-is-negative.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`gmp_root()` and `gmp_rootrem()` compute the integer part of the `$nth` root of `$num`. A negative number only has a real `$nth` root when `$nth` is odd (for example, the cube root of -27 is -3), so an even `$nth` combined with a negative `$num` has no meaningful integer result.

This validation has thrown a `ValueError` since PHP 8.0; PHP 8.6 only corrected the argument name referenced in the message, from the stub's actual parameter name `$num` (it previously said `$a`, which never matched the real signature).

## Example

```php
<?php

gmp_root(-27, 4);

?>
```

## Literal Examples
+ gmp_root(): Argument #2 ($nth) must be odd if argument #1 ($num) is negative
+ gmp_rootrem(): Argument #2 ($nth) must be odd if argument #1 ($num) is negative

## Alternatives
+ Only request an even $nth root of a negative $num if you actually mean a complex result; otherwise pass a non-negative $num or an odd $nth to gmp_root()/gmp_rootrem().

## Related error messages
+ [must-be-between-1-and-%lu](must-be-between-1-and-%lu.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[PHP 8.0 through 8.5 threw the same ValueError but referenced the first argument as "$a", which did not match the function's actual $num parameter name.](PHP 8.0 through 8.5 threw the same ValueError but referenced the first argument as "$a", which did not match the function's actual $num parameter name.)