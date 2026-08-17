# Cannot make non static method %s::%s() static in class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-non-static-method-ps::psqr-static-in-class-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-non-static-method-ps::psqr-static-in-class-ps.html","name":"Cannot make non static method %s::%s() static in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-16T18:10:43-05:00","dateModified":"2025-02-16T18:10:43-05:00","description":"Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-non-static-method-ps::psqr-static-in-class-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Once a method has been defined, the `static` keyword, or its absence, must be preserved for the same method in the children classes.

## Example

```php
<?php

class X {
    function foo() {}
}

class Y extends X {
    static function foo() {}
}

?>
```

## Literal Examples
+ Cannot make non static method X::foo() static in class Y

## Alternatives
+ Add the ``static`` keyword to the method in the parent class.
+ Remove the ``static`` keyword in all eponymous methods in the children class.
+ Rename some of the methods to avoid a ``static`` conflict.

## Related error messages
+ [cannot-make-static-method-%s::%s()-non-static-in-class-%s](cannot-make-static-method-%s::%s\(\)-non-static-in-class-%s.html)
