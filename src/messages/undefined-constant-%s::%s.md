# Undefined constant %s::%s

## Description
The requested class constant could not be found.

The error message is distinct for the global constants, although there is no mention of class in this one.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-constant-%s::%s.html","name":"Undefined constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The requested class constant could not be found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	const Z = 1;
	private A = 2;
}

echo X::Y; 

?>
```

## Literal Examples
+ Undefined constant X::CONSTANT

## Alternatives
+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Check the namespace, or its import.
+ Check the visibility of the class constant: it may be private, or protected.
+ Check the autoload system, to make sure the definition could be found.
+ Define the class constant in the class, or its traits, interfaces or parents.

## Related error messages
+ [undefined-constant-"%s](undefined-constant-%s.html)

In previous PHP versions, this error message used to be :ref:`undefined-class-constant-'%s::%s'`.