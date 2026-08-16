# An iterator cannot be used with foreach by reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-iterator-cannot-be-used-with-foreach-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-iterator-cannot-be-used-with-foreach-by-reference.html","name":"An iterator cannot be used with foreach by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-30T22:07:36+02:00","dateModified":"2026-04-10T10:58:03+02:00","description":"It is possible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/an-iterator-cannot-be-used-with-foreach-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to use a foreach loop with a reference on the blind variable: this allows the original data to be modified. 

Such feature is possible with an array as a source, but it is not possible with an iterator as a source. The iterator allows reading, but has no support for writing the individual elements it emits.

## Example

```php
<?php

    $heap = new SplMinHeap;
    foreach( $heap as &$item ) {}

?>
```

## Alternatives
+ Turn the iterator into an array and use it.
+ Keep the blind variable per-value, and call a setter in it to update it.
+ Use objects in the iterator, it is possible to update the blind variable without the reference.
