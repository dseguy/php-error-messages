# Cannot assign reference to non referenceable value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-reference-to-non-referenceable-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-reference-to-non-referenceable-value.html","name":"Cannot assign reference to non referenceable value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-05-06T07:21:26+02:00","dateModified":"2025-05-06T07:21:26+02:00","description":"It is possible to assign values by references, only when the right operand is already stored in a variable, or similar","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-reference-to-non-referenceable-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to assign values by references, only when the right operand is already stored in a variable, or similar.

## Example

```php
<?php

list(&$x) = [1, 2]; 

$array = [1,2];
list(&$x, ) = $array 

?>
```

## Alternatives
+ Store the operand in a variable (or equivalent).
+ Assign values individually.
