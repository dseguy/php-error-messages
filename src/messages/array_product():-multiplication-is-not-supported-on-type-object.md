# array_product(): Multiplication is not supported on type object

## Description
array_product() multiplies each element in the first argument, with each other. This is a valid operation for integer, floats, numeric strings, booleans and null, as they can be cast to numbers. 

This is not the case for arrays, objects, non-numeric strings or resources, which yield this warning, and are omitted in the operation.

Objects are not turned to string before being cast to numeric.

Until PHP 8.3, the omission of invalid argument was a silent behavior.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_product():-multiplication-is-not-supported-on-type-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_product():-multiplication-is-not-supported-on-type-object.html","name":"array_product(): Multiplication is not supported on type object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"array_product() multiplies each element in the first argument, with each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_product():-multiplication-is-not-supported-on-type-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

var_dump(array_product([new stdClass()] )); // returns 1

var_dump(array_product([new stdClass(), 3] )); // returns 99

?>
```

## Alternatives
+ Filter out all values in the first argument not actually numeric: aka, they can't be cast to integer or float without error.
+ Filter out all objects inside the first argument.

## Related error messages
+ [array_product():-multiplication-is-not-supported-on-type-array](array\_product\(\):-multiplication-is-not-supported-on-type-array.html)
+ [array_product():-multiplication-is-not-supported-on-type-string](array\_product\(\):-multiplication-is-not-supported-on-type-string.html)
+ [array_sum():-addition-is-not-supported-on-type-array](array\_sum\(\):-addition-is-not-supported-on-type-array.html)
