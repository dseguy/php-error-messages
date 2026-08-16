# Cannot use variable $%S twice

## Description
The same variable cannt be mentioned twice in the use part of a closure definition. This would mean the same argument is defined twice, which is useless.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-variable-$%s-twice.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-variable-$%s-twice.html","name":"Cannot use variable $%S twice","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The same variable cannt be mentioned twice in the use part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-variable-$%s-twice.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$fn = function() use ($a, &$a) {
    $a = 2;
};

?>
```

## Literal Examples
+ Cannot use variable $a twice

## Alternatives
+ Make all variables mentioned in the use expression unique (with or without the reference).
