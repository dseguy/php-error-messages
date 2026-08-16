# Spread operator is not supported in assignments

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/spread-operator-is-not-supported-in-assignments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/spread-operator-is-not-supported-in-assignments.html","name":"Spread operator is not supported in assignments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-14T23:20:06+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The spread operator cannot be used with the list() operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/spread-operator-is-not-supported-in-assignments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The spread operator cannot be used with the list() operator. It may be used to spread an array into arguments, but it is not possible to do the same when assigning elements inside an array.

## Example

```php
<?php

[...$x] = [1, 2, 3];

list(...$x) = array(1, 2, 3);

[$x[0], , $x['a']] = [1, 2, 3];

?>
```

## Alternatives
+ Write the full list of targets in the list operator: it might be array elements, and the array nor the elements needs to pre-exists.
