# Cannot use %s() on static property %pS::$%pS

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-static-property-pps::$pps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-static-property-pps::$pps.html","name":"Cannot use %s() on static property %pS::$%pS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``ReflectionProperty::setRawValueWithoutLazyInitialization()`` and ``::skipLazyInitialization()`` are part of the lazy objects API (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-static-property-pps::$pps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setRawValueWithoutLazyInitialization()` and `::skipLazyInitialization()` are part of the lazy objects API (PHP 8.4): they exist to manipulate the storage slot of a lazily-initialized instance property without triggering (or interfering with) the object's lazy initializer. A static property belongs to the class, not to any particular instance, and is never subject to per-object lazy initialization, so these methods refuse to act on it.

## Example

```php
<?php

class Foo {
    public static int $counter = 0;
}

$obj = new Foo();

$prop = new ReflectionProperty(Foo::class, 'counter');
$prop->setRawValueWithoutLazyInitialization($obj, 5);

?>
```

## Literal Examples
+ Cannot use setRawValueWithoutLazyInitialization() on static property Foo::$counter
+ Cannot use skipLazyInitialization() on static property Foo::$counter

## Alternatives
+ Use ReflectionProperty::setValue() for static properties instead of setRawValueWithoutLazyInitialization()/skipLazyInitialization(), which only make sense for lazily-initialized instance properties.

## Related error messages
+ [cannot-use-%s()-on-dynamic-property-%ps::$%ps](cannot-use-%s\(\)-on-dynamic-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-virtual-property-%ps::$%ps](cannot-use-%s\(\)-on-virtual-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-internal-class-%ps](cannot-use-%s\(\)-on-internal-class-%ps.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on static property %s::$%s" (no parentheses after the method name, and "Can not" as two words).](Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on static property %s::$%s" (no parentheses after the method name, and "Can not" as two words).)