# passing a negative integer to argument #3 ($width) is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-negative-integer-to-argument-#3-($width)-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-negative-integer-to-argument-#3-($width)-is-deprecated.html","name":"passing a negative integer to argument #3 ($width) is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``mb_strimwidth()`` trims a string to a given display width","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-negative-integer-to-argument-#3-($width)-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mb_strimwidth()` trims a string to a given display width. Its `$width` argument used to accept negative values, in which case the width was measured from the end of the string instead of from `$start`.

A review of public code found essentially no real-world usage of a negative `$width`, and the feature made the function's behavior harder to reason about for little benefit. As of PHP 8.3.0, passing a negative integer for this argument is deprecated.

## Example

```php
<?php

echo mb_strimwidth('Hello world', 0, -5, '...');

?>
```

## Alternatives
+ Compute the trimmed width explicitly (e.g. using ``mb_strwidth()``) and pass a positive value to ``mb_strimwidth()``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_strimwidth](mb_strimwidth)