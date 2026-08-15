# static::class cannot be used for compile-time class name resolution

## Description
static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding. A class constant, on the other hand, is resolved once and shared identically by the declaring class and every class that inherits it, so it cannot hold a value that is meant to vary per subclass. self::class is accepted in the same spot because it never varies.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static::class-cannot-be-used-for-compile-time-class-name-resolution.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static::class-cannot-be-used-for-compile-time-class-name-resolution.html","name":"static::class cannot be used for compile-time class name resolution","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:12:55 +0000","dateModified":"Tue, 04 Aug 2026 19:12:55 +0000","description":"static::class resolves to the class name of whichever subclass is actually in scope at runtime, through late static binding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static::class-cannot-be-used-for-compile-time-class-name-resolution.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Base {
	const NAME = static::class;
}

?>
```

## Alternatives
+ Use self::class if a fixed class name is acceptable.
+ Expose it through a method instead: public static function name(): string { return static::class; }.

## Related error messages
+ [static::-"-is-not-allowed-in-compile-time-constants](asdf)
+ [static-"-is-not-allowed-in-compile-time-constants](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()