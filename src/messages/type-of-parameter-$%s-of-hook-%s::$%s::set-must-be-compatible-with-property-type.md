# Type of parameter $%s of hook %s::$%s::set must be compatible with property type

## Description
When a `set` hook declares an explicit parameter type, that type is what callers of `$object->prop = $value` are constrained to. Because the hook is the only way to write to the property, its parameter type must be able to accept every value that the property's own declared type allows; it must be the same as, or wider (contravariant) than, the property type, never narrower.

In the example, `$prop` is declared as `string|array`, but the `set` hook only accepts `string`. An assignment of an `array` would satisfy the property's declared type but be rejected by the hook's parameter type, which PHP considers an incompatible, and therefore invalid, declaration.

The same error occurs when the property itself has no explicit type (implicitly `mixed`) but the `set` hook restricts its parameter to a specific type, since `mixed` is wider than any concrete type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type.html","name":"Type of parameter $%s of hook %s::$%s::set must be compatible with property type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:59:43 +0000","dateModified":"Fri, 24 Jul 2026 15:59:43 +0000","description":"When a ``set`` hook declares an explicit parameter type, that type is what callers of ``$object->prop = $value`` are constrained to","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Test {
    public string|array $prop {
        set(string $prop) {}
    }
}

?>
```

## Literal Examples
+ Type of parameter $prop of hook Test::$prop::set must be compatible with property type

## Alternatives
+ Widen the ``set`` hook's parameter type so that it accepts everything the property's declared type allows, e.g. change ``set(string $prop)`` to ``set(string|array $prop)``.
+ Remove the explicit type from the ``set`` hook's parameter, letting it default to the property's type.
+ Narrow the property's declared type to match what the ``set`` hook is willing to accept.

## Related error messages
+ [set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s)](set-type-of-%s::$%s-must-be-supertype-of-%s-\(as-in-%s-%s\).html)
+ [get-hook-of-property-%s::$%s-must-not-have-a-parameter-list](get-hook-of-property-%s::$%s-must-not-have-a-parameter-list.html)
+ [get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference](get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()