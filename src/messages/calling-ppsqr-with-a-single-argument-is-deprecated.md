# Calling %pS() with a single argument is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-single-argument-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-single-argument-is-deprecated.html","name":"Calling %pS() with a single argument is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"``ReflectionProperty::setValue()`` accepts an object as its 1st argument and the new value as its 2nd argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-single-argument-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setValue()` accepts an object as its 1st argument and the new value as its 2nd argument. Static properties have no associated object, so PHP historically allowed calling `setValue()` with a single argument (the value only) to set a static property.

Since this single-argument form is ambiguous with the two-argument form used for instance properties, it is deprecated as of PHP 8.3. The 1st argument must now be passed explicitly, using `null` to mean "this is a static property".

## Example

```php
<?php

class X {
    public static int $count = 0;
}

$prop = new ReflectionProperty(X::class, 'count');

// deprecated: the object argument is missing
$prop->setValue(42);

var_dump(X::$count);

?>
```

## Literal Examples
+ Calling ReflectionProperty::setValue() with a single argument is deprecated

## Alternatives
+ Call ``setValue(null, $value)`` instead of ``setValue($value)`` to set a static property.
+ For instance properties, always pass the object as the 1st argument: ``setValue($object, $value)``.
+ Use ``ReflectionClass::setStaticPropertyValue()`` as an alternative way to set a static property by reflection.

## Related error messages
+ [calling-%ps()-with-a-1st-argument-which-is-not-null-or-an-object-is-deprecated](calling-%ps\(\)-with-a-1st-argument-which-is-not-null-or-an-object-is-deprecated.html)

## Related error messages
+ [ReflectionProperty::setValue](https://www.php.net/manual/en/reflectionproperty.setvalue.php)
+ [ReflectionClass::setStaticPropertyValue](https://www.php.net/manual/en/reflectionclass.setstaticpropertyvalue.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()