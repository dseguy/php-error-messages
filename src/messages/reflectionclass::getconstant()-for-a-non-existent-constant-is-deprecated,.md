# ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists

## Description
`ReflectionClass::getConstant()` returns `false` both when the requested constant does not exist and when the constant's actual value is `false`, so the return value alone cannot tell the two cases apart. Calling it for a constant that does not exist is now deprecated in favour of an explicit existence check.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,.html","name":"ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"``ReflectionClass::getConstant()`` returns ``false`` both when the requested constant does not exist and when the constant's actual value is ``false``, so the return value alone cannot tell the two cases apart","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    const FOO = 1;
}

$class = new ReflectionClass(X::class);
$value = $class->getConstant('BAR');
var_dump($value);

?>
```

## Literal Examples
+ ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists

## Alternatives
+ Call ``ReflectionClass::hasConstant()`` first, and only call ``getConstant()`` once existence is confirmed.

## Related error messages
+ [reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,](reflectionproperty::getdefaultvalue\(\)-for-a-property-without-a-default-value-is-deprecated,.html)

## Related error messages
+ [ReflectionClass::getConstant](https://www.php.net/manual/en/reflectionclass.getconstant.php)
+ [ReflectionClass::hasConstant](https://www.php.net/manual/en/reflectionclass.hasconstant.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ReflectionClass::getConstant](ReflectionClass::getConstant)