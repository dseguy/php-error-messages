# %s is not supported on type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-is-not-supported-on-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-is-not-supported-on-type-%s.html","name":"%s is not supported on type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"This error is reported when an operation is attempted indirectly on a wrong type of data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-is-not-supported-on-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
