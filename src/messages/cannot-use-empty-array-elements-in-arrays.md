# Cannot use empty array elements in arrays

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-array-elements-in-arrays.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-array-elements-in-arrays.html","name":"Cannot use empty array elements in arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-27T19:23:52+01:00","dateModified":"2025-04-06T10:11:59+02:00","description":"Arrays can only hold values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-empty-array-elements-in-arrays.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Arrays can only hold values. There is not meaning in an empty slots in an array. 

This problem happens at writing time, and cannot happen at execution time. 

This problem looks very similar to the usage of list() with empty slots: yet, list() is allowed to skip all but at least one element. With the modern short syntax of arrays and list, it might be tricky to distinguish them.

## Example

```php
<?php

$a = [,,,];
$a = array(,,,);

[,,$x] = [1,2,3];
list(,,$x) = [1,2,3];

?>
```

## Alternatives
+ Spot consecutive commas in an array() syntax.
