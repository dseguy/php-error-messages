# must not be NAN

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-nan.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-nan.html","name":"must not be NAN","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-nan.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6's `clamp()` function returns `$value` restricted to the range `[$min, $max]`. Comparing anything against `NAN` never produces a meaningful ordering, so `$min` and `$max` cannot be `NAN`.

Passing `NAN` as either bound throws a `ValueError` naming the offending argument, instead of returning an unpredictable result.

## Example

```php
<?php

clamp(5, NAN, 10);

?>
```

## Literal Examples
+ clamp(): Argument #2 ($min) must not be NAN
+ clamp(): Argument #3 ($max) must not be NAN

## Alternatives
+ Do not pass ``NAN`` as the ``$min`` or ``$max`` argument to ``clamp()``; validate floating-point bounds with ``is_nan()`` first if they come from an untrusted source.

## Related error messages
+ [must-be-smaller-than-or-equal-to-argument-#3-($max)](must-be-smaller-than-or-equal-to-argument-#3-\($max\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()