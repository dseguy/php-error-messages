# Parameter uses 'parent' as type hint although class does not have a parent!

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-uses-parent-as-type-hint-although-class-does-not-have-a-parent!.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-uses-parent-as-type-hint-although-class-does-not-have-a-parent!.html","name":"Parameter uses 'parent' as type hint although class does not have a parent!","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-14T18:09:14+02:00","dateModified":"2025-09-14T18:09:14+02:00","description":"This error is a Reflection API error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/parameter-uses-parent-as-type-hint-although-class-does-not-have-a-parent!.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is a Reflection API error. It appears when the code tries to get information about the type of a parameter, that was defined as 'parent' while it is not a valid code.

## Example

```php
<?php

class X {
	function foo(parent $a) {}
}

?>
```

## Alternatives
+ Check the name of the type before trying to instantiate it.

In more recent PHP versions, this error message is now :ref:`cannot-use-"parent"-when-current-class-scope-has-no-parent`.