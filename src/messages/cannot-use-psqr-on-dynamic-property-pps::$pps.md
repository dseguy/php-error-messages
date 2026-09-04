# Cannot use %s() on dynamic property %pS::$%pS

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-dynamic-property-pps::$pps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-dynamic-property-pps::$pps.html","name":"Cannot use %s() on dynamic property %pS::$%pS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``ReflectionProperty::setRawValueWithoutLazyInitialization()`` and ``::skipLazyInitialization()`` are part of the lazy objects API (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-dynamic-property-pps::$pps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setRawValueWithoutLazyInitialization()` and `::skipLazyInitialization()` are part of the lazy objects API (PHP 8.4): they work by reaching directly into the storage slot reserved for a *declared* property, bypassing the object's lazy initializer. A dynamic property (one added to a specific object at runtime rather than declared in its class) has no such reserved slot, so these methods have nothing to operate on and throw instead.

Since `ReflectionProperty` is constructed from a property name that may or may not correspond to an actual declared property on the given object, this can only be detected at call time, once the object is known.

## Example

```php
<?php

class Foo {}

$obj = new Foo();
$obj->bar = 1;

$prop = new ReflectionProperty($obj, 'bar');
$prop->setRawValueWithoutLazyInitialization($obj, 2);

?>
```

## Literal Examples
+ Cannot use setRawValueWithoutLazyInitialization() on dynamic property Foo::$bar
+ Cannot use skipLazyInitialization() on dynamic property Foo::$bar

## Alternatives
+ Only call setRawValueWithoutLazyInitialization()/skipLazyInitialization() for properties that are actually declared on the object's class, e.g. after checking ReflectionProperty::isDynamic() (or checking the object with property_exists() against the class declaration).

## Related error messages
+ [cannot-use-%s()-on-static-property-%ps::$%ps](cannot-use-%s\(\)-on-static-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-virtual-property-%ps::$%ps](cannot-use-%s\(\)-on-virtual-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-internal-class-%ps](cannot-use-%s\(\)-on-internal-class-%ps.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on dynamic property %s::$%s" (no parentheses after the method name, and "Can not" as two words).](Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on dynamic property %s::$%s" (no parentheses after the method name, and "Can not" as two words).)