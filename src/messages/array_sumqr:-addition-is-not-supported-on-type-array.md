# array_sum(): Addition is not supported on type array

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_sumqr:-addition-is-not-supported-on-type-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_sumqr:-addition-is-not-supported-on-type-array.html","name":"array_sum(): Addition is not supported on type array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-14T10:02:54+02:00","dateModified":"2025-09-14T10:02:54+02:00","description":"array_sum() adds each element in the first argument, with each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_sumqr:-addition-is-not-supported-on-type-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
array_sum() adds each element in the first argument, with each other. This is a valid operation for integers, floats, numeric strings, booleans and null, as they can be cast to numbers. 

This is not the case for arrays, objects, non-numeric strings or resources, which yield this warning, and are omitted in the operation.

Until PHP 8.3, the omission of invalid argument was a silent behavior.

## Example

```php
<?php

var_dump(array_sum([[]] )); // returns 0

var_dump(array_sum([[], 3] )); // returns 3

?>
```

## Alternatives
+ Filter out all values in the first argument not actually numeric: aka, they can't be cast to integer or float without error.
+ Filter out all arrays inside the first argument.

## Related error messages
+ [array_product():-multiplication-is-not-supported-on-type-object](array\_product\(\):-multiplication-is-not-supported-on-type-object.html)
