# syntax error, unexpected token ",", expecting variable or "$"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-,,-expecting-variable-or-$.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-,,-expecting-variable-or-$.html","name":"syntax error, unexpected token \",\", expecting variable or \"$\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error is reported when a list of global variable is expected after the ``global`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-,,-expecting-variable-or-$.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when a list of global variable is expected after the `global` keyword. 

There is a similar case with the visibility options `public`, `protected` and `private`, and the `static` keyword, although `global` is the only keyword with accepts variable variables.

Generally speaking, there can be no two successive commas in an expression, except with the `list()` keyword.

## Example

```php
<?php

class X {
	public function foo() {
	    global $a, , $c;
	}
}

?>
```

## Alternatives
+ Remove the extra comma.
+ Fill the empty slot with a variable.

## Related error messages
+ [syntax-error,-unexpected-token-",",-expecting-variable](syntax-error,-unexpected-token-,,-expecting-variable.html)
+ [syntax-error,-unexpected-token-",",-expecting-"]"](syntax-error,-unexpected-token-,,-expecting-\].html)
+ [syntax-error,-unexpected-token-","](syntax-error,-unexpected-token-,.html)
