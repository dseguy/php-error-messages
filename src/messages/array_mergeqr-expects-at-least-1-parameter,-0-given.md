# array_merge() expects at least 1 parameter, 0 given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_merge()-expects-at-least-1-parameter,-0-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_merge()-expects-at-least-1-parameter,-0-given.html","name":"array_merge() expects at least 1 parameter, 0 given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"Until PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_merge()-expects-at-least-1-parameter,-0-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 7.4, array_merge() always needed at least one argument to execute. This means that using the variadic operator on an empty array yielded no argument, and then, an error.

Since PHP 7.4, array_merge() handles graciously the case of no arguments, by returning an empty array, and not more error.

This applies to array_merge() and array_merge_recursive().

## Example

```php
<?php

$array = [];

$array2 = array_merge(...[]);

?>
```

## Alternatives
+ Check for non-empty array before using it with array_merge().
