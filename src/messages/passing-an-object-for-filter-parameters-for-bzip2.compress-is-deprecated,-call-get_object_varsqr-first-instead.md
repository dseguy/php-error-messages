# Passing an object for filter parameters for bzip2.compress is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-filter-parameters-for-bzip2.compress-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-filter-parameters-for-bzip2.compress-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for filter parameters for bzip2.compress is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:02:19+00:00","dateModified":"2026-09-20T20:02:19+00:00","description":"The ``bzip2","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-filter-parameters-for-bzip2.compress-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `bzip2.compress` stream filter accepts its parameters as an associative array (`blocksize100k`, `workfactor`), but has always also accepted an object, reading the same keys off its public properties. PHP 8.6 deprecates passing an object here, matching the equivalent deprecation for `bzip2.decompress` and for the zlib filters.

## Example

```php
<?php

class ParamsCompress {
    public int $blocks = 5;
    public int $work = 10;
}

$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'bzip2.compress', STREAM_FILTER_WRITE, new ParamsCompress());
fwrite($fp, 'Hello world');

?>
```

## Alternatives
+ Convert the object to an array first with ``get_object_vars($obj)`` and pass that as the filter parameters.
+ Pass an associative array literal instead of building an options object.

## Related error messages
+ [passing-an-object-for-filter-parameters-for-bzip2.decompress-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-filter-parameters-for-bzip2.decompress-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)
+ [passing-an-object-for-filter-parameters-for-%s-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-filter-parameters-for-%s-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)

In previous PHP versions, this error message used to be :ref:`passing-an-object-for-filter-parameters-for-%s-is-deprecated,-call-get_object_vars()-first-instead`.
In more recent PHP versions, this error message is now :ref:`passing-an-object-for-filter-parameters-for-bzip2.decompress-is-deprecated,-call-get_object_vars()-first-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()