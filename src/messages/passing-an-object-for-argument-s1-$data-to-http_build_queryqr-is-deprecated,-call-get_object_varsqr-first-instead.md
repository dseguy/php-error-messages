# Passing an object for argument #1 $data to http_build_query() is deprecated, call get_object_vars() first instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$data-to-http_build_queryqr-is-deprecated,-call-get_object_varsqr-first-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$data-to-http_build_queryqr-is-deprecated,-call-get_object_varsqr-first-instead.html","name":"Passing an object for argument #1 $data to http_build_query() is deprecated, call get_object_vars() first instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T22:21:00+02:00","dateModified":"2026-09-20T22:21:00+02:00","description":"``http_build_query()``'s ``$data`` parameter is documented as taking an array, but has always also accepted an object, building the query string from its accessible (public, from outside the class) properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-an-object-for-argument-s1-$data-to-http_build_queryqr-is-deprecated,-call-get_object_varsqr-first-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`http_build_query()`'s `$data` parameter is documented as taking an array, but has always also accepted an object, building the query string from its accessible (public, from outside the class) properties. PHP 8.6 deprecates passing an object directly as `$data`. Passing an object nested inside the array is separately deprecated too.

## Example

```php
<?php

class KeyVal {
    public $public = 'input';
    protected $protected = 'hello';
    private $private = 'world';
}

echo http_build_query(new KeyVal());

?>
```

## Alternatives
+ Convert the object to an array first with ``get_object_vars($obj)`` and pass that to http_build_query().
+ If the object implements a mapping interface, expose its data as an array explicitly, e.g. via a dedicated method.

## Related error messages
+ [object-values-within-argument-#1-$data-to-http_build_query()-being-interpreted-as-arrays-is-deprecated,](object-values-within-argument-#1-$data-to-http\_build\_query\(\)-being-interpreted-as-arrays-is-deprecated,.html)

In more recent PHP versions, this error message is now :ref:`object-values-within-argument-#1-$data-to-http_build_query()-being-interpreted-as-arrays-is-deprecated,`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()