# must be less than argument #2 ($max)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-less-than-argument-s2-q$maxr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-less-than-argument-s2-q$maxr.html","name":"must be less than argument #2 ($max)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-26T09:15:48+00:00","dateModified":"2026-08-26T09:15:48+00:00","description":"``gmp_random_range()`` returns a random GMP number in the inclusive range ``[$min, $max]``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-less-than-argument-s2-q$maxr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`gmp_random_range()` returns a random GMP number in the inclusive range `[$min, $max]`. That range only makes sense when `$min` is strictly less than `$max`.

This has thrown a `ValueError` for a non-positive range since PHP 8.0; PHP 8.6 only corrected the argument name referenced in the message, from the stub's actual parameter name `$max` (it previously said `$maximum`, which never matched the real signature).

## Example

```php
<?php

gmp_random_range(10, 5);

?>
```

## Literal Examples
+ gmp_random_range(): Argument #1 ($min) must be less than argument #2 ($max)

## Alternatives
+ Make sure $min is strictly less than $max when calling gmp_random_range().

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[PHP 8.0 through 8.5 threw the same ValueError but referenced the second argument as "$maximum", which did not match the function's actual $max parameter name.](PHP 8.0 through 8.5 threw the same ValueError but referenced the second argument as "$maximum", which did not match the function's actual $max parameter name.)