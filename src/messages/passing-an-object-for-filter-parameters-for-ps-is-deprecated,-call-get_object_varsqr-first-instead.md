# Passing an object for filter parameters for %s is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-filter-parameters-for-ps-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-filter-parameters-for-ps-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for filter parameters for %s is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:02:17+00:00","dateModified":"2026-09-20T20:02:17+00:00","description":"``stream_filter_append()`` (and ``stream_filter_prepend()``) pass their ``$params`` argument through to the named stream filter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-filter-parameters-for-ps-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`stream_filter_append()` (and `stream_filter_prepend()`) pass their `$params` argument through to the named stream filter. The bundled `zlib.deflate` and `zlib.inflate` filters accept it as an associative array of options, but have always also accepted an object, reading the same keys off its public properties. PHP 8.6 deprecates passing an object for these two filters — the `%s` in the message is replaced with the filter name, `zlib.deflate` or `zlib.inflate`. The bzip2 filters have the same deprecation under distinct, filter-specific messages.

## Example

```php
<?php

class Options {
    public int $level = 9;
}

$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'zlib.deflate', STREAM_FILTER_WRITE, new Options());
fwrite($fp, 'Hello world');

?>
```

## Literal Examples
+ stream_filter_append(): Passing an object for filter parameters for zlib.deflate is deprecated, call get_object_vars() first instead
+ stream_filter_append(): Passing an object for filter parameters for zlib.inflate is deprecated, call get_object_vars() first instead

## Alternatives
+ Convert the object to an array first with ``get_object_vars($obj)`` and pass that as the filter parameters.
+ Pass an associative array literal instead of building an options object.

## Related error messages
+ [passing-an-object-for-filter-parameters-for-bzip2.compress-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-filter-parameters-for-bzip2.compress-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)
+ [passing-an-object-for-filter-parameters-for-bzip2.decompress-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-filter-parameters-for-bzip2.decompress-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)

In more recent PHP versions, this error message is now :ref:`passing-an-object-for-filter-parameters-for-bzip2.compress-is-deprecated,-call-get_object_vars()-first-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()