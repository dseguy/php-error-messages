# object values within argument #1 $data to http_build_query() being interpreted as arrays is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-values-within-argument-s1-$data-to-http_build_queryqr-being-interpreted-as-arrays-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-values-within-argument-s1-$data-to-http_build_queryqr-being-interpreted-as-arrays-is-deprecated,.html","name":"object values within argument #1 $data to http_build_query() being interpreted as arrays is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T22:21:00+02:00","dateModified":"2026-09-20T22:21:00+02:00","description":"``http_build_query()`` walks its ``$data`` argument recursively, and treats any object value it finds along the way \u2014 not just the top-level argument \u2014 as if it were an array, iterating its public properties to build nested query keys such as ``public[public]=input``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-values-within-argument-s1-$data-to-http_build_queryqr-being-interpreted-as-arrays-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`http_build_query()` walks its `$data` argument recursively, and treats any object value it finds along the way — not just the top-level argument — as if it were an array, iterating its public properties to build nested query keys such as `public[public]=input`. PHP 8.6 deprecates this implicit array-like treatment of nested object values, on top of the separate deprecation for passing an object as the top-level `$data` argument itself.

## Example

```php
<?php

class KeyVal {
    public $public = 'input';
}

$o = new KeyVal();
$nested = new KeyVal();
$o->public = $nested;

echo http_build_query($o);

?>
```

## Literal Examples
+ http_build_query(): object values within argument #1 $data to http_build_query() being interpreted as arrays is deprecated, instead the $data argument should be preprocessed with get_object_vars()

## Alternatives
+ Convert nested objects to arrays with ``get_object_vars()`` before assigning them, so the structure passed to http_build_query() is plain arrays all the way down.
+ Restructure the data so query parameters are built from arrays rather than objects.

## Related error messages
+ [passing-an-object-for-argument-#1-$data-to-http_build_query()-is-deprecated,-call-get_object_vars()-first-instead](passing-an-object-for-argument-#1-$data-to-http\_build\_query\(\)-is-deprecated,-call-get\_object\_vars\(\)-first-instead.html)

In previous PHP versions, this error message used to be :ref:`passing-an-object-for-argument-#1-$data-to-http_build_query()-is-deprecated,-call-get_object_vars()-first-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()