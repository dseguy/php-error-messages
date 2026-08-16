# ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,.html","name":"ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-17T22:59:23+02:00","dateModified":"2026-07-17T22:59:23+02:00","description":"``ReflectionProperty::getDefaultValue()`` returns ``null`` both when the property genuinely defaults to ``null`` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionProperty::getDefaultValue()` returns `null` both when the property genuinely defaults to `null` and when the property has no default value at all (such as an uninitialized typed property), so the return value alone cannot tell the two cases apart. Calling it for a property that has no default value is now deprecated in favour of an explicit existence check.

## Example

```php
<?php

class X {
    public int $prop;
}

$r = new ReflectionProperty(X::class, 'prop');
var_dump($r->getDefaultValue());

?>
```

## Literal Examples
+ ReflectionProperty::getDefaultValue() for a property without a default value is deprecated, use ReflectionProperty::hasDefaultValue() to check if the default value exists

## Alternatives
+ Call ``ReflectionProperty::hasDefaultValue()`` first, and only call ``getDefaultValue()`` once a default value is confirmed to exist.

## Related error messages
+ [reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,](reflectionclass::getconstant\(\)-for-a-non-existent-constant-is-deprecated,.html)

## Related error messages
+ [ReflectionProperty::getDefaultValue](https://www.php.net/manual/en/reflectionproperty.getdefaultvalue.php)
+ [ReflectionProperty::hasDefaultValue](https://www.php.net/manual/en/reflectionproperty.hasdefaultvalue.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ReflectionProperty::getDefaultValue](ReflectionProperty::getDefaultValue)