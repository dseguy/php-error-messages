# syntax error, unexpected token ",", expecting variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-,,-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-,,-expecting-variable.html","name":"syntax error, unexpected token \",\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error is reported when a list of variable is expected after a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-,,-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when a list of variable is expected after a keyword.

This is the case with the visibility options `public`, `protected` and `private`, which expect a list of property names.

This is also the case with `global` and `static`, which are declaring global and static variables.

Generally speaking, there can be no two successive commas in an expression, except with the `list()` keyword.

## Example

```php
<?php

class X {
	public $a, , $c;
	
	public function foo() {
	    static $a, , $c;
	}
}
?>
```

## Alternatives
+ Remove the extra comma.
+ Fill the empty slot with a variable.

## Related error messages
+ [syntax-error,-unexpected-token-",",-expecting-variable-or-"$"](syntax-error,-unexpected-token-,,-expecting-variable-or-$.html)
+ [syntax-error,-unexpected-token-",",-expecting-"]"](syntax-error,-unexpected-token-,,-expecting-\].html)
+ [syntax-error,-unexpected-token-","](syntax-error,-unexpected-token-,.html)
