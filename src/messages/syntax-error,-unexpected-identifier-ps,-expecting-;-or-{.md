# syntax error, unexpected identifier "%s", expecting ";" or "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-ps,-expecting-;-or-{.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-ps,-expecting-;-or-{.html","name":"syntax error, unexpected identifier \"%s\", expecting \";\" or \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T07:12:06+00:00","dateModified":"2026-07-15T07:12:06+00:00","description":"An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a ``{`` opening the body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-ps,-expecting-;-or-{.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An abstract method's signature must be terminated with a semicolon, since it has no body, and a concrete method's signature must be followed by a `{` opening the body. Here, an extra identifier was found right after the closing parenthesis of the argument list, where PHP expected one of those two terminators.

This typically happens when a return type declaration is missing its leading colon, or when a stray word was left over after editing the signature.

## Example

```php
<?php

abstract class X {
    abstract function foo() bar;
}

?>
```

## Literal Examples
+ syntax error, unexpected identifier "bar", expecting ";" or "{"

## Alternatives
+ If a return type was intended, add a colon before it: ``abstract function foo(): bar;``.
+ Remove the extra identifier.
+ If the method should have a body, replace the identifier with ``{`` and the method's code.

## Related error messages
+ [syntax-error,-unexpected-identifier-"%s",-expecting-"("](syntax-error,-unexpected-identifier-%s,-expecting-\(.html)
+ [syntax-error,-unexpected-variable-"$this",-expecting-";"-or-"{"](syntax-error,-unexpected-variable-$this,-expecting-;-or-{.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()