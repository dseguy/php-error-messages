# static::\" is not allowed in compile-time constants

## Description
Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it. Referencing static:: inside a constant expression would make the value depend on late static binding, i.e. on whichever subclass actually reads it, which contradicts a constant's fixed nature, so PHP rejects it at compile time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static::-\"-is-not-allowed-in-compile-time-constants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static::-\"-is-not-allowed-in-compile-time-constants.html","name":"static::\\\" is not allowed in compile-time constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Class constants are meant to hold a single, fixed value shared identically by the declaring class and every subclass that inherits it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static::-\"-is-not-allowed-in-compile-time-constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Base {
	const A = 1;
	const B = static::A * 2;
}

?>
```

## Alternatives
+ Use self:: instead if the intent is to always refer to the declaring class's own member.
+ Compute the value in a static method instead of a constant.

## Related error messages
+ [static-"-is-not-allowed-in-compile-time-constants](asdf)
+ [static::class-cannot-be-used-for-compile-time-class-name-resolution](asdf)
+ [cannot-use-dynamic-class-name-in-constant-expression](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()