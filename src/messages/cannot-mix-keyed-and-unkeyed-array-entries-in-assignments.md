# Cannot mix keyed and unkeyed array entries in assignments

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html","name":"Cannot mix keyed and unkeyed array entries in assignments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-02-16T19:49:02-05:00","dateModified":"2025-02-16T12:47:22-05:00","description":"list() is a construct that maps an array to a set of variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-keyed-and-unkeyed-array-entries-in-assignments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
list() is a construct that maps an array to a set of variables. The assignation is done by position, or by key. By position, this means the first value of the array goes to the first variable of the list() : in that case, list() doesn't specify keys with the => operator. On the other hand, the key are matched by their value, and not their position. The error here happens when list() syntax is created with a mixed set of position and key assignations.

## Example

```php
<?php

$array = [];

list(
    '' => $foo,
    $bar
) = $array;
?>
```

## Literal Examples
+ Cannot mix keyed and unkeyed array entries in assignments

## Alternatives
+ Remove all the => operators in the list() call.
+ Add all the => operators in the list() call.
+ Make the assignations in a different way.
