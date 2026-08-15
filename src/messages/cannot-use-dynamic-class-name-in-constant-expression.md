# Cannot use dynamic class name in constant expression

## Description
"New in initializers" (PHP 8.1) lets new SomeClass(...) appear in constant-expression contexts, such as default parameter values, but only when the class name is written literally, or via self/parent, something resolvable without evaluating an arbitrary expression. A dynamic class name taken from a variable or another expression cannot be resolved once and for all in that fixed, deferred context, so it is rejected at compile time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-dynamic-class-name-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-dynamic-class-name-in-constant-expression.html","name":"Cannot use dynamic class name in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"\"New in initializers\" (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-dynamic-class-name-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$className = 'DateTime';

class Bar {
	public function baz($obj = new $className()) {}
}

?>
```

## Alternatives
+ Use a literal class name instead of a variable.
+ Move the object creation into the function body instead of the parameter default.

## Related error messages
+ [cannot-use-anonymous-class-in-constant-expression](cannot-use-anonymous-class-in-constant-expression.html)
+ [static::-"-is-not-allowed-in-compile-time-constants](static::--is-not-allowed-in-compile-time-constants.html)
+ [cannot-use--"::class-"-on-%s](cannot-use--::class--on-%s.html)
+ [static-"-is-not-allowed-in-compile-time-constants](static--is-not-allowed-in-compile-time-constants.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()