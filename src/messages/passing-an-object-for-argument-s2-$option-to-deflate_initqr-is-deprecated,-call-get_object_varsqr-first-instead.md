# Passing an object for argument #2 $option to deflate_init() is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s2-$option-to-deflate_initqr-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s2-$option-to-deflate_initqr-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for argument #2 $option to deflate_init() is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:01:13+00:00","dateModified":"2026-09-20T20:01:13+00:00","description":"``deflate_init()``'s ``$options`` argument is documented as taking an associative array (``level``, ``memory``, ``window``, ``strategy``, ``dictionary``), but has always also accepted an object, reading the same keys off its public properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s2-$option-to-deflate_initqr-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`deflate_init()`'s `$options` argument is documented as taking an associative array (`level`, `memory`, `window`, `strategy`, `dictionary`), but has always also accepted an object, reading the same keys off its public properties. PHP 8.6 deprecates passing an object here, matching the equivalent deprecation for `inflate_init()`.

## Example

```php
<?php

class Options {
    public int $level = 3;
}

$context = deflate_init(ZLIB_ENCODING_RAW, new Options());

?>
```

## Alternatives
+ Convert the object to an array first with ``get_object_vars($obj)`` and pass that as ``$options``.
+ Pass an associative array literal instead of building an options object.

## Related error messages
+ [passing-an-object-for-argument-#2-$option-to-inflate_init()-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-argument-#2-$option-to-inflate\_init\(\)-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)

In more recent PHP versions, this error message is now :ref:`passing-an-object-for-argument-#2-$option-to-inflate_init()-is-deprecated,-call-get_object_vars()-first-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()