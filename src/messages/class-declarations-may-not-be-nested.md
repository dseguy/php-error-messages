# Class declarations may not be nested

## Description
It is not allowed to define a class, trait, interface or enum inside another class, trait or enum. 

Conditional classes, trait, interfaces or enum may be created, inside if/then, functions and closures, or also loop structures.

The error message is the same for all types of structures, and only mentions class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-declarations-may-not-be-nested.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-declarations-may-not-be-nested.html","name":"Class declarations may not be nested","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"It is not allowed to define a class, trait, interface or enum inside another class, trait or enum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-declarations-may-not-be-nested.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	function foo() {
		class Y {}
	}
}

?>
```

## Alternatives
+ Use an anonymous class.
+ Use a conditional class, with a if/then, in the global space.
+ Use a function to store the definition and call it at will.

## Related error messages
+ [cannot-redeclare-class-%s](asdf)
