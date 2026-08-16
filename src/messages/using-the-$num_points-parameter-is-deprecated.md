# Using the $num_points parameter is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-the-$num_points-parameter-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-the-$num_points-parameter-is-deprecated.html","name":"Using the $num_points parameter is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``imagepolygon()`` and ``imagefilledpolygon()`` take an array of point coordinates and a ``$num_points`` argument stating how many vertices that array describes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-the-$num_points-parameter-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`imagepolygon()` and `imagefilledpolygon()` take an array of point coordinates and a `$num_points` argument stating how many vertices that array describes. In practice, `$num_points` is almost always equal to `count($points) / 2`, since the array must contain the x/y pairs for exactly that many points.

Because the value is redundant with the actual size of `$points`, and mismatches between the two used to be a common source of bugs (or of manual, brittle `count() / 2` computations at every call site), the `$num_points` argument is deprecated as of PHP 8.1.0 in favor of omitting it and letting PHP derive the point count from the array itself.

## Example

```php
<?php

$im = imagecreatetruecolor(100, 100);
$color = imagecolorallocate($im, 255, 0, 0);
$points = [10, 10, 50, 90, 90, 10];

imagepolygon($im, $points, 3, $color);

?>
```

## Alternatives
+ Omit ``$num_points`` entirely, e.g. ``imagepolygon($im, $points, $color)``; ``$points`` must then contain an even number of elements.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[imagepolygon](imagepolygon), [imagefilledpolygon](imagefilledpolygon)