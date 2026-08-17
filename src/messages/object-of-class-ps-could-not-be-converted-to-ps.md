# Object of class %s could not be converted to %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-ps-could-not-be-converted-to-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-ps-could-not-be-converted-to-ps.html","name":"Object of class %s could not be converted to %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-19T14:23:06+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"An object cannot be converted automatically into a string, without calling a dedicated method, or setting up the magic method called ``__toString``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/object-of-class-ps-could-not-be-converted-to-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An object cannot be converted automatically into a string, without calling a dedicated method, or setting up the magic method called `__toString`. 

With native PHP operators and functions, the call to `__toString` is automagic. With custom functions, it is dependent on the `strict_types` configuration: when `strict_types` is activated, it prevents the automatic conversion to string, and yields the error.

## Example

```php
<?php

class X {}

$x = new X;
// This would work if the __toString() method is defined in X
echo $x;

function foo(string $s) {
    echo $s;
}

// This works with __toString() and without strict_types=1
foo($x);

?>
```

## Literal Examples
+ Object of class X could not be converted to string

## Alternatives
+ Remove the strict_types configuration.
+ Add a cast to (string) to explicitly activate the conversion to string.
+ Create a method to do the conversion, and use it, instead of the raw object.
