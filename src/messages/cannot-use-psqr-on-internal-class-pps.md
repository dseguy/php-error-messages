# Cannot use %s() on internal class %pS

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-internal-class-pps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-internal-class-pps.html","name":"Cannot use %s() on internal class %pS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``ReflectionProperty::setRawValueWithoutLazyInitialization()`` and ``::skipLazyInitialization()`` are part of the lazy objects API (PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-psqr-on-internal-class-pps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setRawValueWithoutLazyInitialization()` and `::skipLazyInitialization()` are part of the lazy objects API (PHP 8.4). Making an object lazy relies on the engine's default property read/write handlers, so it can intercept property access to trigger initialization. Some internal (C-implemented) classes, such as `ZipArchive`, install their own custom property handlers instead and cannot be made lazy, so a declared property found on such a class still cannot be manipulated through these low-level, lazy-initialization-only APIs, and PHP throws instead of writing to a slot that the object's own handlers do not expect to be touched directly.

## Example

```php
<?php

$zip = new ZipArchive();

$prop = new ReflectionProperty($zip, 'status');
$prop->setRawValueWithoutLazyInitialization($zip, 0);

?>
```

## Literal Examples
+ Cannot use setRawValueWithoutLazyInitialization() on internal class ZipArchive
+ Cannot use skipLazyInitialization() on internal class ZipArchive

## Alternatives
+ Use ReflectionProperty::setValue() to set a property on an internal class instance, since setRawValueWithoutLazyInitialization()/skipLazyInitialization() only work with classes that support the engine's default property handlers and can be made lazy.

## Related error messages
+ [cannot-use-%s()-on-dynamic-property-%ps::$%ps](cannot-use-%s\(\)-on-dynamic-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-static-property-%ps::$%ps](cannot-use-%s\(\)-on-static-property-%ps::$%ps.html)
+ [cannot-use-%s()-on-virtual-property-%ps::$%ps](cannot-use-%s\(\)-on-virtual-property-%ps::$%ps.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on internal class %s" (no parentheses after the method name, and "Can not" as two words).](Prior to PHP 8.6, the same ReflectionException was thrown, but worded "Can not use %s on internal class %s" (no parentheses after the method name, and "Can not" as two words).)