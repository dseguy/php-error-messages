# Cannot use object of type %s as array

## Description
An object is not an array: as such, it cannot use the array syntax `[1]`, based on square brackets, but the object syntax, with the object operators `->` and `?->`.

A class may be made compatible with the array syntax, by implementing the ArrayAccess. Then, it is possible to use the array syntax. 

The scalar types are also forbidden to use the array syntax, although they are currently generating a warning, while the same error yields a Fatal Error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-%s-as-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-%s-as-array.html","name":"Cannot use object of type %s as array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"An object is not an array: as such, it cannot use the array syntax ``[1]``, based on square brackets, but the object syntax, with the object operators ``->`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-object-of-type-%s-as-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [trying-to-access-array-offset-on-%s](asdf)

## Related error messages
+ [ArrayAccess](https://www.php.net/manual/en/class.arrayaccess.php)
