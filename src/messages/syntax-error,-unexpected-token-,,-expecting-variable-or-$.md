# syntax error, unexpected token ",", expecting variable or "$"

## Description
This error is reported when a list of global variable is expected after the `global` keyword. 

There is a similar case with the visibility options `public`, `protected` and `private`, and the `static` keyword, although `global` is the only keyword with accepts variable variables.

Generally speaking, there can be no two successive commas in an expression, except with the `list()` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\",-expecting-variable-or-\"$\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\",-expecting-variable-or-\"$\".html","name":"syntax error, unexpected token \",\", expecting variable or \"$\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is reported when a list of global variable is expected after the ``global`` keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\",-expecting-variable-or-\"$\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [syntax-error,-unexpected-token-",",-expecting-variable](asdf)
+ [syntax-error,-unexpected-token-",",-expecting-"]"](asdf)
+ [syntax-error,-unexpected-token-","](asdf)
