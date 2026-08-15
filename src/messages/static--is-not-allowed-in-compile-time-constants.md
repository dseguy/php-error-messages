# static" is not allowed in compile-time constants

## Description
"New in initializers" (PHP 8.1) allows new expressions in constant-expression contexts, such as default parameter values, as long as the class being instantiated is fixed and unambiguous: a literal class name, self, or parent. static refers to the class actually used at call time (late static binding), which can differ for every subclass, so it cannot be resolved once and for all at the point the initializer is compiled, and is rejected.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-\"-is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-\"-is-not-allowed-in-compile-time-constants.html","name":"static\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"\"New in initializers\" (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-\"-is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [static::-"-is-not-allowed-in-compile-time-constants](asdf)
+ [static::class-cannot-be-used-for-compile-time-class-name-resolution](asdf)
+ [cannot-use-dynamic-class-name-in-constant-expression](asdf)
+ [cannot-use-anonymous-class-in-constant-expression](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()