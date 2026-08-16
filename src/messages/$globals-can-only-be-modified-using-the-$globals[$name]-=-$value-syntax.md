# $GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/$globals-can-only-be-modified-using-the-$globals[$name]-=-$value-syntax.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/$globals-can-only-be-modified-using-the-$globals[$name]-=-$value-syntax.html","name":"$GLOBALS can only be modified using the $GLOBALS[$name] = $value syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-06T12:15:58+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/$globals-can-only-be-modified-using-the-$globals[$name]-=-$value-syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.1, it is not possible to replace `$GLOBALS` entirely. It has to be modified at the index level, and not as a whole. 

The error message is a bit misleading: on the spot operations with index are still possible, such as `++` or `array_map` or `array_walk`.

This means that `$GLOBALS['index']` may be written, while `$GLOBALS`  cannot. 

`$GLOBALS['index']` and `$GLOBALS` can still be used for reading.

## Example

```php
<?php

$GLOBALS = [];

// That is also OK
$x = 3;
echo $GLOBALS['x']++;

?>
```

## Alternatives
+ Make a loop over ``$GLOBALS`` and update each index individually.
+ Avoid updating ``$GLOBALS``: keep a copy in another variable.
