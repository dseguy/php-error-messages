# Undefined constant "%s"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-constant-\"%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-constant-\"%s.html","name":"Undefined constant \"%s\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"The requested constant doesn't exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-constant-\"%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The requested constant doesn't exist. 

The constant may be defined at different places in the code : 

+ In the running code: it could be in a different file, which was not included yet, or later in the code.
+ In a dependency: use the name of the constant to find which dependency defines this constant. Then, make sure the dependency is satisfied.
+ In an extension: use the name of the constant to find which PHP extension defines this constant. For example, `XML_PI_NODE` is from the ext/xml extension, which may not be in the current PHP engine.

There is a distinct message for class constants.

It is possible to create a circular definition of constant, that leads to this error message. This is the case with a direct recursive definition, where the constant is used to define itself. Since the constant is not defined yet, it cannot be used in the right expression, and that leads to an 'undefined constant' error.

It is also possible to build such recursive structure by using an object, and using that constant in the class of the related object.

## Example

```php
<?php

// early usage of the constant
echo A;

const A = 2;

// Recursive constant definition
const A = A + 1;

// Recursive constant definition (longer version)
class X {
    const B = C;
}
const C = new X;

?>
```

## Literal Examples
+ Undefined constant "A"
+ Undefined constant "XML_PI_NODE"

## Alternatives
+ Find the actual name of the requested constant.
+ Check the namespace, or its import: ``use const``.
+ Check if the constant is used after its definition.
+ Check if the constant is defined in a PHP extension, and the extension was forgotten.
+ Check if the constant is defined in a dependency, and the dependency was forgotten.

## Related error messages
+ [undefined-constant-%s::%s](undefined-constant-%s::%s.html)
+ [cannot-declare-self-referencing-constant](cannot-declare-self-referencing-constant.html)
