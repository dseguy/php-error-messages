# Cannot use \"::class\" on %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"::class-\"-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"::class-\"-on-%s.html","name":"Cannot use \\\"::class\\\" on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:11:13 +0000","dateModified":"Tue, 04 Aug 2026 19:11:13 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use--\"::class-\"-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.0, expr::class can be used on any object expression to retrieve its class name, not only on class names, self, static or parent. When the expression is a scalar literal, such as an integer, float, string or boolean, PHP can already tell at compile time that it will never hold an object, and rejects the construct right away instead of waiting for a runtime error. %s is replaced with a description of the offending value.

## Example

```php
<?php

echo 10::class;

?>
```

## Alternatives
+ Only use ::class on a class name, or on an expression that can hold an object.

## Related error messages
+ [cannot-use-dynamic-class-name-in-constant-expression](cannot-use-dynamic-class-name-in-constant-expression.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()