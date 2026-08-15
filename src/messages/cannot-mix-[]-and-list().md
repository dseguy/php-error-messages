# Cannot mix [] and list()

## Description
list() and the short [] syntax are two different notations for exactly the same destructuring construct. PHP requires a single destructuring expression to use one notation consistently at every nesting level; using list() for the outer pattern and [] for a nested one, or the other way around, is rejected at compile time even though each form is individually valid.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-[]-and-list().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-[]-and-list().html","name":"Cannot mix [] and list()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:02:26 +0000","dateModified":"Tue, 04 Aug 2026 19:02:26 +0000","description":"list() and the short [] syntax are two different notations for exactly the same destructuring construct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-mix-[]-and-list().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$data = [1, [2, 3]];

list($a, [$b, $c]) = $data;

?>
```

## Alternatives
+ Use list() consistently at every level: list($a, list($b, $c)) = $data;
+ Use the short [] syntax consistently at every level: [$a, [$b, $c]] = $data;

## Related error messages
+ [cannot-assign-to-array(),-use-[]-instead](cannot-assign-to-array\(\),-use-\[\]-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()