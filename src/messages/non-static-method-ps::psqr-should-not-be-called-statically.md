# Non-static method %s::%s() should not be called statically

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-static-method-%s::%s()-should-not-be-called-statically.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-static-method-%s::%s()-should-not-be-called-statically.html","name":"Non-static method %s::%s() should not be called statically","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-01T10:07:29+01:00","dateModified":"2025-03-15T10:08:31+01:00","description":"A non-static method requires an object to be called, as PHP will populate that object in the ``$this`` method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-static-method-%s::%s()-should-not-be-called-statically.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A non-static method requires an object to be called, as PHP will populate that object in the `$this` method. 

If the method makes no use of `$this`, make it static to allow the call. Otherwise, keep it non-static, and use an object for the call.

## Example

```php
<?php

class X {
	function foo() { echo __METHOD__;}
}

X::foo();

?>
```

## Literal Examples
+ Non-static method x::foo() should not be called statically

## Alternatives
+ Make the method static.
+ Find an object to call the method.

## Related error messages
+ [non-static-method-%s::%s()-cannot-be-called-statically](non-static-method-%s::%s\(\)-cannot-be-called-statically.html)

In more recent PHP versions, this error message is now :ref:`non-static-method-%s::%s()-cannot-be-called-statically`.