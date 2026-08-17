# Declaration of %s must be compatible with %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-ps-must-be-compatible-with-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-ps-must-be-compatible-with-ps.html","name":"Declaration of %s must be compatible with %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-03T21:55:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Classes methods signature have to be compatible between a parent class and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-ps-must-be-compatible-with-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Classes methods signature have to be compatible between a parent class and a child class. When the signatures are different, the caller has to figure out which object is being used, and how to call the method. Hence, PHP checks that methods are compatible. 

Method signature compatibility applies to all methods, except for `__construct`, which may have completely different signatures one from another.

The error message requires `compatible` signatures, which means that some variations are possible, and others are not. 

Authorized variations

+ Add a new parameter, with a default value 
+ Make the returntype more general than the parent
+ Make the parameter types stricter than the parent
+ Add elements to a union type of a parameter
+ Change the default value 
+ Change the names of the parameters (not recommended)
+ Make the visibility stricter 

Forbidden variations

+ Add or remove a parameter
+ Add or remove a default value
+ Add or remove a parameter type
+ Add or remove the return type
+ Add or remove the reference option
+ Add or remove the variadic option
+ Add or remove the static option.

## Example

```php
<?php

class X {
    function foo($a) {}
    
}

class Y extends X {
    function foo() {}
    
}
?>
```

## Literal Examples
+ Declaration of x::foo() must be compatible with y::foo()

## Alternatives
+ Check the variations and fix them.
+ Change the name of the method to a free one.
