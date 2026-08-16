# Cannot override final %s::%s() with %s::%s()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-%s::%s()-with-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-%s::%s()-with-%s::%s().html","name":"Cannot override final %s::%s() with %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``final`` keyword prevents any child class to define the same constant or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-%s::%s()-with-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `final` keyword prevents any child class to define the same constant or method. This impacts any class that tries to extends a `final` class.

## Example

```php
<?php

class X {
	final function foo() {}
}

class Y extends X {
	function foo() {}
}

?>
```

## Literal Examples
+ Cannot override final x::foo() with y::foo()

## Alternatives
+ Remove the final option in the parent class.
+ Rename the non-final constant or method in the child class.

## Related error messages
+ [%s::%s-cannot-override-final-constant-%s::%s](%s::%s-cannot-override-final-constant-%s::%s.html)
