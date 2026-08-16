# Assignments can only happen to writable values

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assignments-can-only-happen-to-writable-values.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assignments-can-only-happen-to-writable-values.html","name":"Assignments can only happen to writable values","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-15T22:09:22+01:00","dateModified":"2025-04-11T19:46:35+02:00","description":"With the list() operator, the right part of the => operator must be a variable or equivalent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assignments-can-only-happen-to-writable-values.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
With the list() operator, the right part of the => operator must be a variable or equivalent. The corresponding value on the right part of the assignation will be stored there, so it has to be a data container. It is possible to use a variable, property (static or not), an array element or an array append. 

The same error may happen when the property is not available: this may be the case with a nullsafe operator.

This is valid with or without the index part, in the list() call.

## Example

```php
<?php

// short array syntax. The left part is not an array, but a list()
[1] = [2];
['a' => 1] = ['a' => 2];

list('a' => 1) = array('a' => 2);

// ?-> may be returning null, and not a valid container.
[$foo?->bar->baz] = ['bar'];

?>
```

## Alternatives
+ Use a variable.
+ Use an array append.
+ Use a a property.
