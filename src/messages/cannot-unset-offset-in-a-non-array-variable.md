# Cannot unset offset in a non-array variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-offset-in-a-non-array-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-offset-in-a-non-array-variable.html","name":"Cannot unset offset in a non-array variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-13T07:08:59+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The array syntax ``$variable[index]`` is only available for arrays and strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-offset-in-a-non-array-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The array syntax `$variable[index]` is only available for arrays and strings. When used on other types, PHP emits a fatal error.  

The boolean `false` and the `null` value still accept this behavior. The first is deprecated in PHP 8.1, and the second valid in PHP 8.3.

## Example

```php
<?php

$x = true;
$x[0] = 1;

?>
```

## Alternatives
+ Check for type before using the array syntax.
+ Keep using consistent types with each variables.
+ Set type with properties to ensure they are consistent.
+ Cast the object to array before usage.

## Related error messages
+ [automatic-conversion-of-false-to-array-is-deprecated](automatic-conversion-of-false-to-array-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`cannot-use-object-of-type-stdclass-as-array`.