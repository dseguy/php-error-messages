# Automatic conversion of false to array is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/automatic-conversion-of-false-to-array-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/automatic-conversion-of-false-to-array-is-deprecated.html","name":"Automatic conversion of false to array is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 16:37:19 +0000","dateModified":"Fri, 14 Aug 2026 16:37:19 +0000","description":"The array syntax ``$variable[index]`` is only available for arrays and strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/automatic-conversion-of-false-to-array-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The array syntax `$variable[index]` is only available for arrays and strings. Yet, false is an edge case: PHP used to convert automatically, and silently, the boolean to array, when that syntax was used. This is called autovivification. 

The other boolean, `true` behaves the same way, with a different error message. 

This feature is used to initialize variables with false, and then convert it to array as needed. 

Since PHP 8.1, it is a deprecated behavior.

## Example

```php
<?php

$variable = false;
$variable[0] = 1;
// $variable is now an array

class X {
    public bool|array $property = false;
}

$x = new X;
$x->property['d'] = 3;

?>
```

## Alternatives
+ Use an empty array as default value.
+ Test the type of the variable before using it as an array.

## Related error messages
+ [cannot-unset-offset-in-a-non-array-variable](cannot-unset-offset-in-a-non-array-variable.html)
+ [cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s](cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[autoInitializeArrayFromBool](autoInitializeArrayFromBool)