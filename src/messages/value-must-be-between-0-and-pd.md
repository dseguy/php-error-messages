# value must be between 0 and %d

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-must-be-between-0-and-pd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-must-be-between-0-and-pd.html","name":"value must be between 0 and %d","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T12:55:05+00:00","dateModified":"2026-08-24T12:55:05+00:00","description":"``imagefilter()`` with ``IMG_FILTER_SCATTER`` accepts an optional 5th argument: an array of color indexes to scatter, each of which is converted to a C ``int`` and must be a non-negative color index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/value-must-be-between-0-and-pd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`imagefilter()` with `IMG_FILTER_SCATTER` accepts an optional 5th argument: an array of color indexes to scatter, each of which is converted to a C `int` and must be a non-negative color index.

Starting in PHP 8.5, GD validates every element of that array and rejects negative or out-of-range values with a `ValueError` naming the offending argument, instead of passing a meaningless value through to the underlying library.

## Example

```php
<?php

$im = imagecreatetruecolor(100, 100);

imagefilter($im, IMG_FILTER_SCATTER, 4, 4, [-1]);

?>
```

## Literal Examples
+ imagefilter(): Argument #5 value must be between 0 and 2147483647

## Alternatives
+ Only pass non-negative color indexes, between ``0`` and ``2147483647``, in the color array given to ``imagefilter(IMG_FILTER_SCATTER)``.

## Related error messages
+ [elements-must-be-between-%d-and-%d](elements-must-be-between-%d-and-%d.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()