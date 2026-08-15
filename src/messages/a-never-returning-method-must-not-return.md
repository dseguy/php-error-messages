# A never-returning method must not return

## Description
When using the `never` keyword, the method shall not use the `return` keyword. `never` means that the method will not return, but rather `die`, throw an exception, or trigger an error.

Also note that `never` cannot be used in a union type.

This error message applies to methods, since PHP 8.4. Before that version, a unified message mentioning functions applied to all structures.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-method-must-not-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-method-must-not-return.html","name":"A never-returning method must not return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:56:32 +0000","dateModified":"Fri, 10 Apr 2026 08:56:32 +0000","description":"When using the ``never`` keyword, the method shall not use the ``return`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-never-returning-method-must-not-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	function foo() : never {
		return true;
	}
}

?>
```

## Alternatives
+ Remove the ``return`` keyword in the body of the method.
+ Change the ``never`` return type to another type.

## Related error messages
+ [a-never-returning-function-must-not-return](asdf)
