# syntax error, unexpected token "("

## Description
Parenthesis cannot be placed anywhere, although they have a wide range of applications. In particular, they are used to call methods, by delimiting arguments; and set part of expressions apart.

A class cannot hold a closure, only method, which are functions with a name.

The syntax to call a method on an instantiation `new x()->foo()` and `new x()()` has been introduced in PHP 8.4.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\".html","name":"syntax error, unexpected token \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Parenthesis cannot be placed anywhere, although they have a wide range of applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// methods cannot be closure. They need a name
class X {
    function () {}
}

// This is a PHP 8.4 syntax, cannot be used before.
new $x()(); 
// equivalent to (new $x())->__invoke();

?>
```

## Alternatives
+ Add the name to the method.

## Related error messages
+ [syntax-error,-unexpected-token-"}"](syntax-error,-unexpected-token-}.html)
+ [syntax-error,-unexpected-token-")"](syntax-error,-unexpected-token-\).html)
+ [syntax-error,-unexpected-token-"]"](syntax-error,-unexpected-token-\].html)
