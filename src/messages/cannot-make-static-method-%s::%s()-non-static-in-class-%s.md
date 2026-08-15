# Cannot make static method %s::%s() non static in class %s

## Description
Once a method has been defined, the `static` keyword, or its absence, must be preserved for the same method in the children classes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-static-method-%s::%s()-non-static-in-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-static-method-%s::%s()-non-static-in-class-%s.html","name":"Cannot make static method %s::%s() non static in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Once a method has been defined, the ``static`` keyword, or its absence, must be preserved for the same method in the children classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-make-static-method-%s::%s()-non-static-in-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function static foo() {}
}

class Y extends X {
    function foo() {}
}

?>
```

## Literal Examples
+ Cannot make static method X::foo() non static in class Y

## Alternatives
+ Remove the ``static`` keyword to the method in the parent class.
+ Add the ``static`` keyword in all eponymous methods in the children class.
+ Rename some of the methods to avoid a ``static`` conflict.

## Related error messages
+ [cannot-make-non-static-method-%s::%s()-static-in-class-%s](asdf)
