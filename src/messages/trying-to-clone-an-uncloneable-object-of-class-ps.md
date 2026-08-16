# Trying to clone an uncloneable object of class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-clone-an-uncloneable-object-of-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-clone-an-uncloneable-object-of-class-%s.html","name":"Trying to clone an uncloneable object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 10:28:16 +0000","dateModified":"Fri, 05 Jun 2026 10:28:16 +0000","description":"It is not possible to instantiate certain classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/trying-to-clone-an-uncloneable-object-of-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to instantiate certain classes. This is the case of enumerations and generators. 

It is also not possible to clone an enumeration cases, which are actually of the same type as the enumeration itself. The only usage is to access the `cases` of the enumeration: they are directly the expected objects.

On the other hand, it is possible to clone a closure.

## Example

```php
<?php

enum E {
    case A;
}
clone E::A;

$g = function () { yield 1; };
clone $g;

$c = function () { return 1; };
clone $c;

?>
```

## Literal Examples
+ Trying to clone an uncloneable object of class e

## Alternatives
+ Use the case ``E::A``. Make sure it is not a class constant, which might be cloned.
+ For generator, call the original variable anytime the code needs a new source for a loop.
