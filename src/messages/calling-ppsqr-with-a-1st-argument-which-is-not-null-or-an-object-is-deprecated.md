# Calling %pS() with a 1st argument which is not null or an object is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-1st-argument-which-is-not-null-or-an-object-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-1st-argument-which-is-not-null-or-an-object-is-deprecated.html","name":"Calling %pS() with a 1st argument which is not null or an object is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"``ReflectionProperty::setValue()`` sets a static property when called as ``setValue(null, $value)``: the 1st argument is not used to locate a static property, since it has no associated object, but it is still type-checked","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-with-a-1st-argument-which-is-not-null-or-an-object-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::setValue()` sets a static property when called as `setValue(null, $value)`: the 1st argument is not used to locate a static property, since it has no associated object, but it is still type-checked.

Prior to this deprecation, PHP silently accepted any value as the 1st argument in that case, as it was simply discarded. Since PHP 8.3, passing a value that is neither `null` nor an object as the 1st argument is deprecated, in order to make the accepted signature consistent with its declared `?object` type.

## Example

```php
<?php

class X {
    public static int $count = 0;
}

$prop = new ReflectionProperty(X::class, 'count');

// deprecated: the 1st argument is ignored for static properties,
// but it must still be null or an object
$prop->setValue('ignored', 42);

var_dump(X::$count);

?>
```

## Literal Examples
+ Calling ReflectionProperty::setValue() with a 1st argument which is not null or an object is deprecated

## Alternatives
+ Pass ``null`` explicitly as the 1st argument when setting a static property: ``setValue(null, $value)``.
+ If the property is not static, pass the actual object instance as the 1st argument instead of an unrelated value.

## Related error messages
+ [calling-%ps()-with-a-single-argument-is-deprecated](calling-%ps\(\)-with-a-single-argument-is-deprecated.html)

## Related error messages
+ [ReflectionProperty::setValue](https://www.php.net/manual/en/reflectionproperty.setvalue.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()