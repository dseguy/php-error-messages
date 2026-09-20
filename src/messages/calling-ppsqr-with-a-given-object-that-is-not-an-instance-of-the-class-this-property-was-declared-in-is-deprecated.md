# Calling %pS() with a given object that is not an instance of the class this property was declared in is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated.html","name":"Calling %pS() with a given object that is not an instance of the class this property was declared in is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:00:07+00:00","dateModified":"2026-09-20T20:00:07+00:00","description":"``ReflectionProperty::setValue()`` and ``ReflectionProperty::setRawValue()`` take the target object as their first argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setValue()` and `ReflectionProperty::setRawValue()` take the target object as their first argument. When that object is not an instance of the class (or a subclass of it) the property was declared on, the write silently falls back to creating a dynamic property on the unrelated object instead of failing. PHP 8.6 deprecates this mismatch, since it almost always indicates the wrong `$propInfo` or the wrong object was used.

## Example

```php
<?php

class TestClass {
    public $pub2 = 5;
}

#[AllowDynamicProperties]
class AnotherClass {
}

$instanceWithNoProperties = new AnotherClass();
$propInfo = new ReflectionProperty('TestClass', 'pub2');

$propInfo->setValue($instanceWithNoProperties, 'NewValue');

?>
```

## Literal Examples
+ Calling ReflectionProperty::setValue() with a given object that is not an instance of the class this property was declared in is deprecated
+ Calling ReflectionProperty::setRawValue() with a given object that is not an instance of the class this property was declared in is deprecated

## Alternatives
+ Only call setValue() / setRawValue() with an object that is an instance of the class the ReflectionProperty was created for.
+ Use ``instanceof`` to verify the object before calling setValue() if it is not known statically.

## Related error messages
+ [calling-%ps()-for-static-method-%ps::%ps()-does-not-need-an-object-parameter](calling-%ps\(\)-for-static-method-%ps::%ps\(\)-does-not-need-an-object-parameter.html)

In previous PHP versions, this error message used to be :ref:`calling-%ps()-for-static-method-%ps::%ps()-does-not-need-an-object-parameter`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()