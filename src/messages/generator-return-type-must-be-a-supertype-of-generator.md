# Generator return type must be a supertype of Generator

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generator-return-type-must-be-a-supertype-of-generator.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generator-return-type-must-be-a-supertype-of-generator.html","name":"Generator return type must be a supertype of Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When a method or a function uses a ``yield`` keyword, it becomes a generator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generator-return-type-must-be-a-supertype-of-generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a method or a function uses a `yield` keyword, it becomes a generator. It also means that the return type of this method must be Generator, or any other of its supertypes: `Traversable`, `Iterator`, `Generator` or `iterable`.

There is no way to set a type on the yielded values: only on the returned values. In this case, it will be a `Generator`. Strangely, any value in a `return` expression is also valid.

It may also be simply removed, and left implicit.

## Example

```php
<?php

function foo() : X {
	yield 1;
	
	return true;
}

?>
```

## Alternatives
+ Use the return type ``Generator``.
