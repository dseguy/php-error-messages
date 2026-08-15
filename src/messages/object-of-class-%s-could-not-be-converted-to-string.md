# Object of class %s could not be converted to string

## Description
PHP reports that the object cannot be used as a string. Converting an object into a string is only possible when the magic method `__toString()` is implemented, or when the interface `Stringable` is implemented.

In that case, the object is automatically converted into a string, thanks to that method. Otherwise, it is a Fatal error.

This is a distinct error than passing an object in a string argument: in that case, it is a Type error.

A lot of native PHP classes support the conversion, but not all of them. Check for `stringable` interface before using them.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-string.html","name":"Object of class %s could not be converted to string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP reports that the object cannot be used as a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-%s-could-not-be-converted-to-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Y { }

//error!
echo (new Y); 

// X could also be implementing Stringable, to enforce the __toString() method
class X {
    function __construct(array $arg) {
        $this->a = $arg;
    }
    
    function __toString(){
        return implode(', ', $this->arg);
    }
}

// valid
echo (new X);

$array1 = [E::A];
$array2 = [E::B];
enum E: string {
    case A = 'a';
    case B = 'b';
}

// hidden necessary string conversion
array_intersect($array1, $array2); // also with other array_intersect* functions

?>
```

## Literal Examples
+ Object of class Y could not be converted to string
+ Object of class stdClass could not be converted to string

## Alternatives
+ Implement the ``Stringable`` interface on the class, or its parent.
+ Implement the ``__toString`` method n the class, or its parent.
+ Call a method that returns a string, on that object.
+ Use ``print_r`` or ``var_dump`` to get the details inside the object.

## Related error messages
+ [object-of-class-%s-could-not-be-converted-to-bool](object-of-class-%s-could-not-be-converted-to-bool.html)
+ [object-of-class-%s-could-not-be-converted-to-int](object-of-class-%s-could-not-be-converted-to-int.html)
+ [object-of-class-%s-could-not-be-converted-to-float](object-of-class-%s-could-not-be-converted-to-float.html)

## Related error messages
+ [4SolutionsForObjectofclassstdclasscouldnotbeconvertedtostringerror](https://agethemes.com/object-of-class-stdclass-could-not-be-converted-to-string/)
