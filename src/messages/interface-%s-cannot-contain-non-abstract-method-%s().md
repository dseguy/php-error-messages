# Interface %s cannot contain non abstract method %s()

## Description
In an interface, there can only be methods signature, and no method body. Aka, this means only the semi-colon after the method signature, et no body block.

Methods in an interface are considered abstract by default. There is no need to add such explicit option, nor is it even legal to use it there.

Hence, in an interface, there are only abstract methods: methods without a body. The abstract keyword is implicit in an interface; When the interface is partially implemented by a class, the remaining methods must be declared abstract in that class. 

If some methods have to be made concrete (aka, not abstract), it is possible to create an abstract class, with a mix of abstract and concrete methods, which can then be extended by the target class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-%s-cannot-contain-non-abstract-method-%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-%s-cannot-contain-non-abstract-method-%s().html","name":"Interface %s cannot contain non abstract method %s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:24:53 +0000","dateModified":"Fri, 24 Jul 2026 17:24:53 +0000","description":"In an interface, there can only be methods signature, and no method body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-%s-cannot-contain-non-abstract-method-%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface I {
	function foo() {}
	
	function bar() ;
}

abstract class CI  {
	function foo() {}
	
	abstract function bar() ;
}

?>
```

## Literal Examples
+ Interface I cannot contain non abstract method foo()

## Alternatives
+ Remove all bodies in an interface's method.
+ Turn the interface into an abstract class.
+ Move the concrete class to a trait, and use the trait, along with the interface.

## Related error messages
+ [%s-method-%s::%s()-must-not-be-abstract](asdf)
