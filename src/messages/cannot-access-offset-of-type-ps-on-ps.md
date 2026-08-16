# Cannot access offset of type %s on %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-offset-of-type-%s-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-offset-of-type-%s-on-%s.html","name":"Cannot access offset of type %s on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-14T18:12:40+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"In an array notation, the offset may be a variable, or any container","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-offset-of-type-%s-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In an array notation, the offset may be a variable, or any container. Yet, it must be a string or an integer; and when applied to an string, it must be an integer.

This error is reported when a value which type is not cast to integer (such as `null`, `boolean`, `float`) or string is used. Here, it is an object. 

Note that a class that extends `ArrayAccess` interface allows the manipulation of any kind of key: this is possible, yet rare.

This error message has been extended to more types than `string` : for example, `array`.

## Example

```php
<?php

// illustration example
$object = new Stdclass;
$string = 'abc';

echo $string[$object];

$array = [];
echo $array[$object];

function foo(A $a) {
    $string = 'abc';
    echo $string[$a];
}

?>
```

## Literal Examples
+ Cannot access offset of type stdClass on string
+ Cannot access offset of type stdClass on array

## Alternatives
+ Check the type of the index before using it in the array notation.
+ Check the type of the underlying object, using the array notation.
+ Cast the index to ``(string)`` or ``(int)`` when using it in the array notation.

## Related error messages
+ [illegal-offset-type](illegal-offset-type.html)
+ [illegal-offset-type-in-unset](illegal-offset-type-in-unset.html)
+ [illegal-offset-type-in-isset-or-empty](illegal-offset-type-in-isset-or-empty.html)
+ [cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s](cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s.html)
