# must be of type %s, %s given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-%s,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-%s,-%s-given.html","name":"must be of type %s, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error message reports that the types of the provided arguments are not compatible with the expected types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-of-type-%s,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error message reports that the types of the provided arguments are not compatible with the expected types. 

Such a conflict appears in various situations: 
+ a scalar type is used when another incompatible type is expected: using an array instead of a integer.
+ a compatible type is provided when strict_types is active: for example, using a numeric string or a stringable object with a `string` type.
+ a parent class is used where a child type is expected: object types accept child classes, not parent ones.
+ the type is an interface, and the provided object is not implementing it explicitly
+ the type has a typo
+ the type should is not the one that is the specifications.

## Example

```php
<?php

function foo(int $i) {}
foo([]);
// with strict_types = 1
foo(1.0);

class A {}
class B extends A {}

function goo(B $b) {}
goo(new A);

?>
```

## Literal Examples
+ must be of type Traversable, int given
+ must be of type int, array given
+ must be of type int, float given
+ must be of type A, B given

## Alternatives
+ Remove the type.
+ Fix the parameter type.
+ Fix the argument type: convert it to the expected type.

## Related error messages
+ [contains-an-invalid-curl-option](contains-an-invalid-curl-option.html)
