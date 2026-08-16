# Cannot use object of type stdClass as array

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-stdclass-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-stdclass-as-array.html","name":"Cannot use object of type stdClass as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-13T07:08:59+01:00","dateModified":"2025-10-19T12:33:32+02:00","description":"The array syntax ``$variable[index]`` is only available for arrays and strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-stdclass-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The array syntax `$variable[index]` is only available for arrays and strings. When used on objects, PHP emits a fatal error.  

The boolean `false` and the `null` value still accept this behavior. The first is deprecated in PHP 8.1, and the second valid in PHP 8.3.

## Example

```php
<?php

$x = new Stdclass();
$x[0] = 1;

?>
```

## Alternatives
+ Check for type before using the array syntax.
+ Keep using consistent types with each variables.
+ Set type with properties to ensure they are consistent.
+ Cast the object to array before usage.

In previous PHP versions, this error message used to be :ref:`cannot-unset-offset-in-a-non-array-variable`.
In more recent PHP versions, this error message is now :ref:`cannot-unset-offset-in-a-non-array-variable`.