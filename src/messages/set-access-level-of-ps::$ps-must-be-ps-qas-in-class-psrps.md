# Set access level of %s::$%s must be %s (as in class %s)%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/set-access-level-of-ps::$ps-must-be-ps-qas-in-class-psrps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/set-access-level-of-ps::$ps-must-be-ps-qas-in-class-psrps.html","name":"Set access level of %s::$%s must be %s (as in class %s)%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-24T19:28:38+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"This error is specific to asymmetric visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/set-access-level-of-ps::$ps-must-be-ps-qas-in-class-psrps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is specific to asymmetric visibility. A property may expose a wider visibility for reading than for writing, for example `public protected(set) string $foo`, which can be read from anywhere but only written from within the class or its subclasses.

When a child class redeclares such a property, the write (`set`) visibility it declares must be the same as, or weaker (more permissive) than, the one inherited from the parent. It cannot be narrowed. In the example, the parent grants write access to `protected(set)`, but the child tries to restrict it further to `private(set)`, which is forbidden.

The same error is raised, with an `omitted` access level instead of a named one, when the parent property has no explicit set-visibility restriction at all (a plain read/write property, or a hooked virtual property whose `get` hook exists but `set` hook does not restrict visibility): in that case, the child is not allowed to introduce any set-visibility restriction, since that would also be a narrowing of what the parent allows.

A property declared `readonly` implicitly behaves as write-once with an asymmetric set visibility, so this error can also surface when a plain or hooked property overrides, or implements, a readonly property with looser write access.

## Example

```php
<?php

class A {
    public protected(set) string $foo;
}

class B extends A {
    public private(set) string $foo;
}

?>
```

## Literal Examples
+ Set access level of B::$foo must be protected(set) (as in class A) or weaker
+ Set access level of B::$foo must be omitted (as in class A)

## Alternatives
+ Use the same set-visibility keyword as the parent class (or omit it, if the parent has none).
+ Widen the set-visibility of the child property so that it is the same as, or weaker than, the parent's.
+ Remove the asymmetric visibility from the child property altogether.

## Related error messages
+ [access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s](access-level-to-%s::%s-must-be-%s-\(as-in-%s-%s\)%s.html)
+ [set-type-of-%s::$%s-must-be-supertype-of-%s-(as-in-%s-%s)](set-type-of-%s::$%s-must-be-supertype-of-%s-\(as-in-%s-%s\).html)
+ [cannot-override-final-property-hook-%s::%s()](cannot-override-final-property-hook-%s::%s\(\).html)
+ [access-level-to-%s::$%s-must-be-%s-(as-in-class-%s)%s](access-level-to-%s::$%s-must-be-%s-\(as-in-class-%s\)%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()