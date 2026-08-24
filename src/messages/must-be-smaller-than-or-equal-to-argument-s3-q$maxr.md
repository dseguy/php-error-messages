# must be smaller than or equal to argument #3 ($max)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-smaller-than-or-equal-to-argument-s3-q$maxr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-smaller-than-or-equal-to-argument-s3-q$maxr.html","name":"must be smaller than or equal to argument #3 ($max)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T20:16:27+00:00","dateModified":"2026-08-24T20:16:27+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-smaller-than-or-equal-to-argument-s3-q$maxr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces the `clamp()` function, which returns `$value` restricted to the inclusive range `[$min, $max]`. For that range to mean anything, `$min` must not be greater than `$max`.

Passing a `$min` that is greater than `$max` throws a `ValueError` for the second argument, naming `$max` as the argument it must not exceed, instead of silently returning a nonsensical result.

## Example

```php
<?php

clamp(5, 10, 1);

?>
```

## Literal Examples
+ clamp(): Argument #2 ($min) must be smaller than or equal to argument #3 ($max)

## Alternatives
+ Make sure the ``$min`` argument to ``clamp()`` is not greater than ``$max``; swap them if they were passed in the wrong order.

## Related error messages
+ [must-not-be-nan](must-not-be-nan.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()