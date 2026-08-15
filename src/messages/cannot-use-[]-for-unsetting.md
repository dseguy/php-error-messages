# Cannot use [] for unsetting

## Description
unset() removes a specific, existing element identified by an explicit key. The empty-bracket append syntax ($array[]) only has meaning in a write context, where it picks the next available integer key to create a new element; there is no such "next element" to remove, so combining the two is rejected at compile time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-[]-for-unsetting.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-[]-for-unsetting.html","name":"Cannot use [] for unsetting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:00 +0000","dateModified":"Thu, 30 Jul 2026 07:30:00 +0000","description":"unset() removes a specific, existing element identified by an explicit key","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-[]-for-unsetting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array = [1, 2, 3];
unset($array[]);

?>
```

## Alternatives
+ Pass an explicit key to unset(), e.g. unset($array[2]);.

## Related error messages
+ [cannot-append-to-$globals](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()