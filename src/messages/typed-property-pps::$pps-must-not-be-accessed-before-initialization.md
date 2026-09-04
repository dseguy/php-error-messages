# Typed property %pS::$%pS must not be accessed before initialization

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-property-pps::$pps-must-not-be-accessed-before-initialization.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-property-pps::$pps-must-not-be-accessed-before-initialization.html","name":"Typed property %pS::$%pS must not be accessed before initialization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:36:15+00:00","dateModified":"2026-09-04T14:36:15+00:00","description":"Typed properties are undefined until they are assigned for the first time, either through a default value or by an explicit assignment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-property-pps::$pps-must-not-be-accessed-before-initialization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Typed properties are undefined until they are assigned for the first time, either through a default value or by an explicit assignment. This differs from untyped properties, where reading before assignment simply yields `NULL`: because a typed property must always hold a value matching its declared type, and `NULL` is not a valid value unless the type is nullable, PHP raises an error instead of inventing one.

The coalesce `??`, `isset()` and `empty()` operators can be used to check whether the property has been initialized, even though it is not set. Be careful not to confuse an uninitialized property with one that is merely empty.

## Example

```php
<?php

class X {
    public int $property;
}

$x = new X;
echo $x->property;

?>
```

## Literal Examples
+ Typed property X::$property must not be accessed before initialization

## Alternatives
+ Give the property a default value.
+ Avoid calling unset() on typed properties, as it resets them to the uninitialized state.
+ Assign the property in the constructor.
+ Use isset(), empty() or ?? to check the property's status before reading it.

## Related error messages
+ [typed-property-%s::$%s-must-not-be-accessed-before-initialization](typed-property-%s::$%s-must-not-be-accessed-before-initialization.html)
+ [attempt-to-unset-static-property-%s::$%s](attempt-to-unset-static-property-%s::$%s.html)
+ [object-not-initialized](object-not-initialized.html)

## Related error messages
+ [Typed property must not be accessed before initialization](https://madewithlove.com/blog/typed-property-must-not-be-accessed-before-initialization/)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()