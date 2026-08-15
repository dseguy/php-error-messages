# syntax error, unexpected identifier "%s", expecting "("

## Description
After the `function` keyword and the function's name, PHP expects the opening parenthesis of the argument list. Here, a second identifier was found instead, which usually means an extra word was typed, or a comma or a return-type colon was forgotten between two declarations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"(\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"(\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 07:12:01 +0000","dateModified":"Wed, 15 Jul 2026 07:12:01 +0000","description":"After the ``function`` keyword and the function's name, PHP expects the opening parenthesis of the argument list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"(\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo bar() {}

?>
```

## Literal Examples
+ syntax error, unexpected identifier "bar", expecting "("

## Alternatives
+ Remove the extra identifier, keeping only the function name.
+ If a return type was intended, add a colon before it: ``function foo(): bar {}``.
+ If two functions were meant to be declared, close the first one and start a new ``function`` statement.

## Related error messages
+ [syntax-error,-unexpected-identifier-"%s",-expecting-";"-or-"{"](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()