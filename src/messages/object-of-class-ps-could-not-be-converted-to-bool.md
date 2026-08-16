# Object of class %s could not be converted to bool

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-bool.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-bool.html","name":"Object of class %s could not be converted to bool","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP reports that the object cannot be used as a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-bool.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP reports that the object cannot be used as a boolean. Converting an object into a boolean is a PHP engine feature, and should be always on. Though, some extensions have not systematically implemented it.

Here, gmp is lacking the support for converting objects into a boolean, though it was fixed in PHP 8.4. When meeting such error, it should be reported to the author of the extension.

## Example

```php
<?php

$x = gmp_result('12', 3);

if ($x) {
    print $x is truthy;
}

?>
```

## Literal Examples
+ Object of class GMP could not be converted to bool

## Alternatives
+ Make an explicit comparison, with ``is_object()``.
+ Make an explicit comparison, with ``instanceof``.

## Related error messages
+ [object-of-class-%s-could-not-be-converted-to-string](object-of-class-%s-could-not-be-converted-to-string.html)
+ [object-of-class-%s-could-not-be-converted-to-float](object-of-class-%s-could-not-be-converted-to-float.html)
+ [object-of-class-%s-could-not-be-converted-to-int](object-of-class-%s-could-not-be-converted-to-int.html)
