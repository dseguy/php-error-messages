# elements must be between %d and %d

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/elements-must-be-between-pd-and-pd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/elements-must-be-between-pd-and-pd.html","name":"elements must be between %d and %d","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T12:53:04+00:00","dateModified":"2026-08-24T12:53:04+00:00","description":"``imagesetstyle()`` takes an array of color indexes (and, optionally, the special value ``IMG_COLOR_TRANSPARENT``) describing a repeating line style, later used by ``imageline()`` when drawing with ``IMG_COLOR_STYLED``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/elements-must-be-between-pd-and-pd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`imagesetstyle()` takes an array of color indexes (and, optionally, the special value `IMG_COLOR_TRANSPARENT`) describing a repeating line style, later used by `imageline()` when drawing with `IMG_COLOR_STYLED`. Each element is converted to a C `int` internally.

Starting in PHP 8.5, GD's array-accepting functions validate that every element actually fits in a native `int` instead of silently truncating it. Passing a value outside the `int` range, such as `PHP_INT_MIN` on a 64-bit build, now raises a `ValueError` naming the offending argument, instead of wrapping or misbehaving.

## Example

```php
<?php

$im = imagecreatetruecolor(10, 10);

imagesetstyle($im, [gdTransparent, PHP_INT_MIN]);

?>
```

## Literal Examples
+ imagesetstyle(): Argument #2 ($style) elements must be between -2147483648 and 2147483647

## Alternatives
+ Only use color indexes and style values that fit within a 32-bit signed integer range (between ``-2147483648`` and ``2147483647``).

## Related error messages
+ [value-must-be-between-0-and-%d](value-must-be-between-0-and-%d.html)
+ [argument-#%d-($%s)-must-be-of-type-%s,-%s-given](argument-#%d-\($%s\)-must-be-of-type-%s,-%s-given.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()