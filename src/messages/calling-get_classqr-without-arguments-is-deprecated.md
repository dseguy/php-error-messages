# Calling get_class() without arguments is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-get_class()-without-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-get_class()-without-arguments-is-deprecated.html","name":"Calling get_class() without arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-15T22:48:05+02:00","dateModified":"2025-05-06T07:21:26+02:00","description":"get_class() used to allow its usage without an argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-get_class()-without-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
get_class() used to allow its usage without an argument. Then, it would return the current class context, at compile time. Hence, in the code here, it used to return `x`, may it be called from `x` or `y`. 

This behavior is not allowed anymore, and will be removed in PHP 9.

Note that calling get_class without an argument was different from calling get_class with the `null` value.

## Example

```php
<?php

class X {
	function foo() {
		echo get_class();         // x
		echo get_class($this);    // y

		// echo get_class(null);  // Type error
	}
}

class Y extends X {}

echo (new Y)->foo();

?>
```

## Alternatives
+ Use the __CLASS__ constant to get the name of the class at compile time.
+ Use the ``get_class($this)`` call, to get the name of the class at execution time.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[get_classWithoutArgument](get_classWithoutArgument)