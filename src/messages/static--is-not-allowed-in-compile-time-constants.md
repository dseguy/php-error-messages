# static" is not allowed in compile-time constants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static--is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static--is-not-allowed-in-compile-time-constants.html","name":"static\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-05T14:00:09+00:00","dateModified":"2026-08-05T14:00:09+00:00","description":"\"New in initializers\" (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static--is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
"New in initializers" (PHP 8.1) allows new expressions in constant-expression contexts, such as default parameter values, as long as the class being instantiated is fixed and unambiguous: a literal class name, self, or parent. static refers to the class actually used at call time (late static binding), which can differ for every subclass, so it cannot be resolved once and for all at the point the initializer is compiled, and is rejected.

## Example

```php
<?php

class Point {
	public function __construct(
		public readonly self $origin = new static()
	) {}
}

?>
```

## Alternatives
+ Use self if the intent is to always instantiate the declaring class.
+ Move the instantiation into the constructor or method body instead, where late static binding works normally: $origin ??= new static();

## Related error messages
+ [static::-"-is-not-allowed-in-compile-time-constants](static::--is-not-allowed-in-compile-time-constants.html)
+ [static::class-cannot-be-used-for-compile-time-class-name-resolution](static::class-cannot-be-used-for-compile-time-class-name-resolution.html)
+ [cannot-use-dynamic-class-name-in-constant-expression](cannot-use-dynamic-class-name-in-constant-expression.html)
+ [cannot-use-anonymous-class-in-constant-expression](cannot-use-anonymous-class-in-constant-expression.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()