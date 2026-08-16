# Set type of %s::$%s must be supertype of %s (as in %s %s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s).html","name":"Set type of %s::$%s must be supertype of %s (as in %s %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 16:14:47 +0000","dateModified":"Fri, 24 Jul 2026 16:14:47 +0000","description":"A property hooked with a ``set`` hook can accept a wider range of values than its declared (``get``) type, since the ``set`` hook is free to convert or narrow whatever it receives before storing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A property hooked with a `set` hook can accept a wider range of values than its declared (`get`) type, since the `set` hook is free to convert or narrow whatever it receives before storing it. In the example, `I::$prop` accepts both `int` and `string` on write, even though it only ever reads back as `string`.

When a class overrides such a property, whether by extending a parent class or implementing an interface, the type accepted on write by the new declaration must remain a supertype of (or equal to) the type accepted by the original declaration. It must not be narrowed.

In the example, `C::$prop` is a plain property, so it can only be assigned values of its own declared type, `string`. This is narrower than the `int|string` accepted by `I::$prop`'s `set` hook, so code that relied on `I`'s contract to pass an `int` to $prop would break. Consequently, PHP rejects the composition.

## Example

```php
<?php

interface I {
    public string $prop {
        set(int|string $value);
    }
}

class C implements I {
    public string $prop;
}

?>
```

## Literal Examples
+ Set type of C::$prop must be supertype of string|int (as in interface I)

## Alternatives
+ Give the child property (or its ``set`` hook parameter) a type that is the same as, or a supertype of, the type accepted by the parent's ``set`` hook.
+ Add an explicit ``set`` hook to the child property, accepting the same or a wider type than the parent.
+ Narrow the type accepted by the parent's ``set`` hook instead, if the wider type is not actually needed.

## Related error messages
+ [type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type](type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type.html)
+ [type-of-%s::$%s-must-be-%s%s-(as-in-class-%s)](type-of-%s::$%s-must-be-%s%s-\(as-in-class-%s\).html)
+ [set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s](set-access-level-of-%s::$%s-must-be-%s-\(as-in-class-%s\)%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()