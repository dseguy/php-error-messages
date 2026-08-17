# Cannot assign to array(), use [] instead in %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-to-arrayqr,-use-[]-instead-in-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-to-arrayqr,-use-[]-instead-in-ps.html","name":"Cannot assign to array(), use [] instead in %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-01-15T18:43:33+01:00","dateModified":"2026-01-15T18:43:33+01:00","description":"The left ``array`` is actualy the ``list`` instruction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-to-arrayqr,-use-[]-instead-in-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The left `array` is actualy the `list` instruction. With that, PHP tries to assign each values of the array on the right to their same position on the left. In this case, there is an array, and it is not possible to assign directly to an array: it could be assigned to an element of that array, just not the whole array.

## Example

```php
<?php

[array($a)] = [array(42)];
var_dump($a);

?>
```

## Alternatives
+ Remove the array() on the left.
+ Remove the [] on the left.
+ Replace the ``=`` with an ``==`` operator, to convert this into an assignation.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()