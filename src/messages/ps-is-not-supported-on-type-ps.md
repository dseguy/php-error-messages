# %s is not supported on type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-is-not-supported-on-type-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-is-not-supported-on-type-ps.html","name":"%s is not supported on type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-10T22:59:39+02:00","dateModified":"2025-04-10T22:59:39+02:00","description":"This error is reported when an operation is attempted indirectly on a wrong type of data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-is-not-supported-on-type-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when an operation is attempted indirectly on a wrong type of data. Here, there is an attempt to add 3 values, one of which is an array.

## Example

```php
<?php

$array = [ 1, 2, [3]];
print array_sum($array);

$array = [ 1, 2, (object) [3]];
print array_product($array);

?>
```

## Literal Examples
+ Addition is not supported on type array
+ Multiplication is not supported on type object

## Alternatives
+ Check that the array only contains numbers.
