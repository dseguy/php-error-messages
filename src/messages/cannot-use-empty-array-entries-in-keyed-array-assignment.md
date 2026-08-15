# Cannot use empty array entries in keyed array assignment

## Description
The list() (also known as [] on the left side of the = sign), can skip some values, by using consecutive commas. This feature is only available with positional list(), which assign the n-th argument to the n-th element of the array.

Since PHP 7.1, list() accepts named element: this feature match the keys with their equivalent in the array, instead of matching the positions. With that feature, skipping an element in the array is useless: it is also not accepted by the PHP engine.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-array-entries-in-keyed-array-assignment.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-array-entries-in-keyed-array-assignment.html","name":"Cannot use empty array entries in keyed array assignment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The list() (also known as [] on the left side of the = sign), can skip some values, by using consecutive commas","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-array-entries-in-keyed-array-assignment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array = ['a' => 1, 3, 'b' => 2];
['a' => $a, , 'b' => $b] = $array;

// valid usage
[$a, , $b] = array_values($array);

?>
```

## Alternatives
+ Remove the extra comma.
+ Remove the keys and use a positional list().
