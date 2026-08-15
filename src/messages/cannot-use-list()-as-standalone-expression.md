# Cannot use list() as standalone expression

## Description
list() assigns values from an array to a list of variables (or data containers). As such, it is a write operation, which should be on the left side of an assignment, or in other write positions, such as a foreach() blind variables or inside another list. list() cannot be used in a read position, as in the code example: list() as not result.

list() also has a short syntax version, `[]`. That short syntax is converted to an array automatically, so it doesn't yield any error then.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-list()-as-standalone-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-list()-as-standalone-expression.html","name":"Cannot use list() as standalone expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"list() assigns values from an array to a list of variables (or data containers)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-list()-as-standalone-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

[list($a)];

// the second [] is not a list() but an array().
[[$a]]; 

?>
```

## Alternatives
+ Use array() or [] instead.

## Related error messages
+ [cannot-use-list-as-key-element](asdf)
