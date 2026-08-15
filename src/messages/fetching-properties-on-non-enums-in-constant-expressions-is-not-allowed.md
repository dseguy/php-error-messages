# Fetching properties on non-enums in constant expressions is not allowed

## Description
Constant expressions are expressions that build the value of a constant. A subset of the features of PHP are available in these expressions. 

In particular, objects are allowed, but it is not possible to fetch properties nor call methods. In fact, properties are allowed, but on a specific type of object: enumeration cases.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html","name":"Fetching properties on non-enums in constant expressions is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Constant expressions are expressions that build the value of a constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/fetching-properties-on-non-enums-in-constant-expressions-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Y {
	public $y = 1;
}

const Y = new Y();

enum Z : string {
	case Z = 'foo';
}

class X {
	const XZ = Z::z->value;
	const X = Y->y;
}

// OK
echo X::XZ;

//Fetching properties on non-enums in constant expressions is not allowed
echo X::X;

?>
```

## Alternatives
+ Do not use properties in constant expressions.

## Related error messages
+ [constant-expression-contains-invalid-operations](constant-expression-contains-invalid-operations.html)
