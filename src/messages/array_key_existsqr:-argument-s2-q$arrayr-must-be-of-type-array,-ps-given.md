# array_key_exists(): Argument #2 ($array) must be of type array, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_key_existsqr:-argument-s2-q$arrayr-must-be-of-type-array,-ps-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_key_existsqr:-argument-s2-q$arrayr-must-be-of-type-array,-ps-given.html","name":"array_key_exists(): Argument #2 ($array) must be of type array, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-01T16:11:57+01:00","dateModified":"2025-04-15T22:30:55+02:00","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_key_existsqr:-argument-s2-q$arrayr-must-be-of-type-array,-ps-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 8.0, it was possible to use array_key_exists() on both arrays, and objects. The objects were considered as an array, where the properties are the indices, linked to their values.

Since PHP 8.0, it is a deprecated behavior, and in a later version, PHP will make the typing more strict.

The other types, such as integer or string, are not accepted either.

## Example

```php
<?php

$object = (object) ['a' => 1]; // stdClass 
var_dump(array_key_exists('a', $object));

?>
```

## Literal Examples
+ array_key_exists(): Argument #2 ($array) must be of type array, stdClass given
+ array_key_exists(): Argument #2 ($array) must be of type array, string given
+ array_key_exists(): Argument #2 ($array) must be of type array, int given

## Alternatives
+ Cast the object to array before searching.
+ Call a method on the object to convert it to an array, before searching.
+ Create a search method, among the properties, on the object.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[array_key_existsOnObjects](array_key_existsOnObjects)