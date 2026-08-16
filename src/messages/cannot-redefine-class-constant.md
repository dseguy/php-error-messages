# Cannot redefine class constant

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redefine-class-constant.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redefine-class-constant.html","name":"Cannot redefine class constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-21T19:25:13+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"It is only allowed to defined a constant once per class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redefine-class-constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is only allowed to defined a constant once per class. 

A constant with the same name may be defined in a parent or child class, or even in a trait: there are rules that allow PHP to select one of them, whenever there is a possible name conflict. 

At the class, interface, trait level, the constants must all be distinct. 

At the enumeration level, the naming conflict may arise between a case and a const: the error message is then the same.

This error applies to class constants, and there is a different error for global constants.

## Example

```php
<?php

class X {
	const A = 1, A = 1;
}

enum E {
	case B;

	const B = 1;
}

?>
```

## Alternatives
+ Remove one of the constant.
+ Rename one of the constant.
+ Move one of the constant to a parent, trait or interface.

## Related error messages
+ [constant-%s-already-defined](constant-%s-already-defined.html)
