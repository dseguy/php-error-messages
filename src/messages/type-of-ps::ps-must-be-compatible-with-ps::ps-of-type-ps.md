# Type of %s::%s must be compatible with %s::%s of type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::%s-must-be-compatible-with-%s::%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::%s-must-be-compatible-with-%s::%s-of-type-%s.html","name":"Type of %s::%s must be compatible with %s::%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-04T21:25:09+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-%s::%s-must-be-compatible-with-%s::%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.3 introduced typed class constants: a class constant may declare the type of value it holds, and that type is enforced. When a class overrides a typed constant inherited from a parent class or an implemented interface, the overriding constant's type must be covariant with the parent's, meaning it must be the same type, or a subtype of it, never a wider or unrelated one.

Here, `Colorful::COLOR` is typed `string`, but `Item` redeclares it as `int`, which is not a subtype of `string`. Since callers relying on `Colorful::COLOR` expect a `string`, PHP rejects the mismatch at compile time.

## Example

```php
<?php

interface Colorful {
    const string COLOR = 'unknown';
}

class Item implements Colorful {
    const int COLOR = 1;
}

?>
```

## Literal Examples
+ Type of Item::COLOR must be compatible with Colorful::COLOR of type string

## Alternatives
+ Use the same type as the parent constant, or a subtype of it.
+ Remove the type declaration from the child constant's declaration, if the language version allows omitting it.
+ Rename the constant, if it is not meant to override the parent one.

## Related error messages
+ [declaration-of-%s::%s()-must-be-compatible-with-%s::%s()](declaration-of-%s::%s\(\)-must-be-compatible-with-%s::%s\(\).html)
+ [type-of-%s::$%s-must-be-%s%s-(as-in-class-%s)](type-of-%s::$%s-must-be-%s%s-\(as-in-class-%s\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()