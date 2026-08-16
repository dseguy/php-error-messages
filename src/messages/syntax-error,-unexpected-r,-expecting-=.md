# syntax error, unexpected \')\', expecting \'=\'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-'='.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-'='.html","name":"syntax error, unexpected \\')\\', expecting \\'=\\'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-05-06T07:21:26+02:00","dateModified":"2025-08-12T22:40:47+02:00","description":"``list()`` must appear on the left side of an assignation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-')',-expecting-'='.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`list()` must appear on the left side of an assignation. It will be filled with the values in the array of the right side.

## Example

```php
<?php

var_dump(list(1,2,3));

?>
```

## Alternatives
+ Add a ``=`` sign to the right of the ``list()`` call, and then, add an array on the right.
+ Turn the ``list()`` into a ``[]`` short syntax. This might change the meaning, as, in this case, ``list()`` becomes an array.
