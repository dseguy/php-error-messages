# setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, %d given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/setlocaleqr-expects-exactly-2-arguments-when-argument-s2-q$localesr-is-an-array,-pd-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/setlocaleqr-expects-exactly-2-arguments-when-argument-s2-q$localesr-is-an-array,-pd-given.html","name":"setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``setlocale()`` accepts a locale to try either as one or more separate string arguments (each tried in turn until one succeeds), or as a single array of candidate locale strings passed as ``$locales``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/setlocaleqr-expects-exactly-2-arguments-when-argument-s2-q$localesr-is-an-array,-pd-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`setlocale()` accepts a locale to try either as one or more separate string arguments (each tried in turn until one succeeds), or as a single array of candidate locale strings passed as `$locales`. Since PHP 8.6, mixing the two forms in the same call, an array followed by further trailing string arguments, is rejected outright: when `$locales` is an array, it must be the only argument supplied after `$category`.

## Example

```php
<?php

setlocale(LC_ALL, ['en_US.UTF-8', 'C'], 'fr_FR.UTF-8');

?>
```

## Literal Examples
+ setlocale() expects exactly 2 arguments when argument #2 ($locales) is an array, 3 given

## Alternatives
+ Pass the candidate locales either as separate string arguments (setlocale($category, $a, $b, ...)) or as a single array ($category, [$a, $b, ...]), but not both in the same call.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, this combination was silently accepted: PHP tried each candidate in the array first, then went on to also try any trailing string arguments as further candidate locales, instead of rejecting the mixed call.](Prior to PHP 8.6, this combination was silently accepted: PHP tried each candidate in the array first, then went on to also try any trailing string arguments as further candidate locales, instead of rejecting the mixed call.)