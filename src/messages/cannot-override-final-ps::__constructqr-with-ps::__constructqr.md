# Cannot override final %s::__construct() with %s::__construct()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-ps::__constructqr-with-ps::__constructqr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-ps::__constructqr-with-ps::__constructqr.html","name":"Cannot override final %s::__construct() with %s::__construct()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:47:06+00:00","dateModified":"2026-09-18T15:47:06+00:00","description":"The ``final`` keyword prevents any child class from redeclaring the same method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-ps::__constructqr-with-ps::__constructqr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `final` keyword prevents any child class from redeclaring the same method. Constructors are not exempt from this rule: if a parent class marks its `__construct()` method as `final`, no child class may declare its own constructor, even though constructors are otherwise treated differently from regular methods during inheritance checks (their signature is not required to be compatible with the parent's).

## Example

```php
<?php

class X {
    final function __construct() {}
}

class Y extends X {
    function __construct() {}
}

?>
```

## Literal Examples
+ Cannot override final X::__construct() with Y::__construct()

## Alternatives
+ Remove the ``final`` keyword from the parent constructor.
+ Do not declare a constructor in the child class; it will inherit the parent's final constructor automatically.
+ Add a differently named factory method in the child class instead of a constructor.

## Related error messages
+ [cannot-override-final-%s::%s()-with-%s::%s()](cannot-override-final-%s::%s\(\)-with-%s::%s\(\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()