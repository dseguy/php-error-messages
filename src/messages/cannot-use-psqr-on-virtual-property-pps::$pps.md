# Cannot use %s() on virtual property %pS::$%pS

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-virtual-property-pps::$pps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-virtual-property-pps::$pps.html","name":"Cannot use %s() on virtual property %pS::$%pS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``ReflectionProperty::setRawValueWithoutLazyInitialization()`` and ``::skipLazyInitialization()`` are part of the lazy objects API (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-virtual-property-pps::$pps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setRawValueWithoutLazyInitialization()` and `::skipLazyInitialization()` are part of the lazy objects API (PHP 8.4): they reach directly into the memory slot backing an ordinary, storage-based property, bypassing the object's lazy initializer. A virtual property (a property hook declared with only `get`/`set` and no backing `$this->propName` storage, from PHP 8.4's property hooks feature) has no such slot at all, so these methods have nothing to write to and throw instead.

## Example

```php
<?php

class Foo {
    public int $bar {
        get => 5;
    }
}

$obj = new Foo();

$prop = new ReflectionProperty($obj, 'bar');
$prop->setRawValueWithoutLazyInitialization($obj, 2);

?>
```

## Literal Examples
+ Cannot use setRawValueWithoutLazyInitialization() on virtual property Foo::$bar
+ Cannot use skipLazyInitialization() on virtual property Foo::$bar

## Alternatives
+ Only call setRawValueWithoutLazyInitialization()/skipLazyInitialization() on properties that actually have backing storage, i.e. hooked properties that reference $this->propName in their get/set hooks, not purely virtual ones.

## Related error messages
+ [cannot-use-%s()-on-dynamic-property-%ps::$%ps](cannot-use-%s\(\)-on-dynamic-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-static-property-%ps::$%ps](cannot-use-%s\(\)-on-static-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-internal-class-%ps](cannot-use-%s\(\)-on-internal-class-%ps.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on virtual property %s::$%s" (no parentheses after the method name, and "Can not" as two words).](Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on virtual property %s::$%s" (no parentheses after the method name, and "Can not" as two words).)