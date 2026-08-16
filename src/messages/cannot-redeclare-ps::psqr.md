# Cannot redeclare %s::%s()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s::%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s::%s().html","name":"Cannot redeclare %s::%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-29T12:44:09+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Each method in a class must have a distinct name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s::%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Each method in a class must have a distinct name. There can be not two methods with the same name.

The parent classes, or the traits, may have duplicate methods: these will be ignored. 

One special case are the enumeration: the backed enumeration, with their type, import two methods to convert a value into one of the case: `try` and `tryFrom`. Then, these two methods are part of the definition of the enumeration, and it is not possible anymore to define them in the enumeration.

## Example

```php
<?php

class X {
    function foo() {}
    function foo() {}
}

enum E {
    function try() {}
    function tryFrom() {}
}

?>
```

## Literal Examples
+ Cannot redeclare X::foo()
+ Cannot redeclare X::try()
+ Cannot redeclare X::tryFrom()

## Alternatives
+ Remove one of the duplicate function.
+ Rename one of the duplicate function.

## Related error messages
+ [cannot-redeclare-%s::$%s](cannot-redeclare-%s::$%s.html)
+ [cannot-redeclare-class-%s](cannot-redeclare-class-%s.html)
