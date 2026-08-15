# Cannot use "parent" when no class scope is active

## Description
`parent` is a keyword that represent the parent class of the current class. When the code is not located inside a class, it cannot have a parent, and so, is forbidden.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"parent\"-when-no-class-scope-is-active.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"parent\"-when-no-class-scope-is-active.html","name":"Cannot use \"parent\" when no class scope is active","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``parent`` is a keyword that represent the parent class of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-\"parent\"-when-no-class-scope-is-active.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(parent $argument) { }

?>
```

## Alternatives
+ Convert the function into a method, in a class with a parent.
+ Convert the function into a closure, and assign it a to an object of a class with a parent.
