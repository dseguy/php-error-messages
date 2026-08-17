# Cannot use "parent" when no class scope is active

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-parent-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-parent-when-no-class-scope-is-active.html","name":"Cannot use \"parent\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"``parent`` is a keyword that represent the parent class of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-parent-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`parent` is a keyword that represent the parent class of the current class. When the code is not located inside a class, it cannot have a parent, and so, is forbidden.

## Example

```php
<?php

function foo(parent $argument) { }

?>
```

## Alternatives
+ Convert the function into a method, in a class with a parent.
+ Convert the function into a closure, and assign it a to an object of a class with a parent.
