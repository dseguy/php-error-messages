# Cannot add element to the array as the next element is already occupied

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html","name":"Cannot add element to the array as the next element is already occupied","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-16T07:23:20-05:00","dateModified":"2025-09-14T10:02:54+02:00","description":"This error appears when the largest PHP integer has been used as an index in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-add-element-to-the-array-as-the-next-element-is-already-occupied.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when the largest PHP integer has been used as an index in an array. When appending a new item in the array, PHP calculates the largest index, and adds one. Though, in this situation, it is not possible anymore to create a new integer, since the last one was used.

This error appears when a value was stored `out of the way`, yet the array is appended later.

## Example

```php
<?php

$array = [0 => 'a', PHP_INT_MAX => 'b'];
$array[] = 3;

?>
```

## Alternatives
+ Avoid using PHP_INT_MAX as index in the array.
+ Assign the value with an explicit index, rather than an append.
