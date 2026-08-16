# syntax error, unexpected variable "$this", expecting ";" or "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"$this\",-expecting-\";\"-or-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"$this\",-expecting-\";\"-or-\"{\".html","name":"syntax error, unexpected variable \"$this\", expecting \";\" or \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T16:24:54+00:00","dateModified":"2026-07-15T16:24:54+00:00","description":"An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-variable-\"$this\",-expecting-\";\"-or-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a `{` opening the body. Here, the variable `$this` was found right after the closing parenthesis of the argument list, where PHP expected one of those two terminators.

`$this` cannot appear here in any case: it is a read-only pseudo-variable, automatically bound to the current object inside a non-static method, and it can never be declared, assigned or used as a standalone statement outside of an expression.

## Example

```php
<?php

abstract class X {
    abstract function foo() $this;
}

?>
```

## Alternatives
+ Remove ``$this`` and terminate the abstract method with a semicolon.
+ If a method body was intended, replace ``$this`` with ``{`` and the method's code.

## Related error messages
+ [syntax-error,-unexpected-identifier-"%s",-expecting-";"-or-"{"](syntax-error,-unexpected-identifier-%s,-expecting-;-or-{.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()