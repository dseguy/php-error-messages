# Cannot use object of type %s as array

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-ps-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-ps-as-array.html","name":"Cannot use object of type %s as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-21T17:06:14+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``->`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-ps-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An object is not an array: as such, it cannot use the array syntax `[1]`, based on square brackets, but the object syntax, with the object operators `->` and `?->`.

A class may be made compatible with the array syntax, by implementing the ArrayAccess. Then, it is possible to use the array syntax. 

The scalar types are also forbidden to use the array syntax, although they are currently generating a warning, while the same error yields a Fatal Error.

## Example

```php
<?php

class X {}

$x = new X;
echo $x[0];

?>
```

## Literal Examples
+ Cannot use object of type x as array

## Alternatives
+ Cast the object to array before using the array syntax.
+ Implement the ArrayAccess interface on the class.
+ Use the object operators on the object.

## Related error messages
+ [trying-to-access-array-offset-on-%s](trying-to-access-array-offset-on-%s.html)

## Related error messages
+ [ArrayAccess](https://www.php.net/manual/en/class.arrayaccess.php)
