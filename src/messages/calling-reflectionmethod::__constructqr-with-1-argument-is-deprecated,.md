# Calling ReflectionMethod::__construct() with 1 argument is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-reflectionmethod::__constructqr-with-1-argument-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-reflectionmethod::__constructqr-with-1-argument-is-deprecated,.html","name":"Calling ReflectionMethod::__construct() with 1 argument is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:13:54+00:00","dateModified":"2026-09-09T14:13:54+00:00","description":"``ReflectionMethod::__construct()`` originally accepted two call shapes: two arguments, ``new ReflectionMethod($classOrObject, $methodName)``, or a single string combining both as ``\"Class::method\"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-reflectionmethod::__constructqr-with-1-argument-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionMethod::__construct()` originally accepted two call shapes: two arguments, `new ReflectionMethod($classOrObject, $methodName)`, or a single string combining both as `"Class::method"`. Overloading the constructor based on argument count made its signature harder to type and to document.

PHP 8.3 added `ReflectionMethod::createFromMethodName()` as a dedicated factory method for the single-string form. As of PHP 8.4, calling the constructor with only 1 argument is deprecated in favor of that factory method.

## Example

```php
<?php

// Single string argument, combining class and method with '::'
$method = new ReflectionMethod('DateTime::format');

echo $method->getName(), "\n";

?>
```

## Literal Examples
+ Calling ReflectionMethod::__construct() with 1 argument is deprecated, use ReflectionMethod::createFromMethodName() instead

## Alternatives
+ Use ReflectionMethod::createFromMethodName('Class::method') instead of new ReflectionMethod('Class::method').
+ Use the 2-argument constructor, new ReflectionMethod($classOrObject, $methodName), when the class and method are already available separately.

## Related error messages
+ [calling-%s()-with-2-arguments-is-deprecated,](calling-%s\(\)-with-2-arguments-is-deprecated,.html)

## Related error messages
+ [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)
+ [ReflectionMethod::createFromMethodName()](https://www.php.net/manual/en/reflectionmethod.createfrommethodname.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()