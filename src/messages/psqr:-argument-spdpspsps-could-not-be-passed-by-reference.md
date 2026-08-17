# %s(): Argument #%d%s%s%s could not be passed by reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-argument-spdpspsps-could-not-be-passed-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-argument-spdpspsps-could-not-be-passed-by-reference.html","name":"%s(): Argument #%d%s%s%s could not be passed by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-01T22:43:32+01:00","dateModified":"2025-10-19T12:33:32+02:00","description":"Methods arguments may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/psqr:-argument-spdpspsps-could-not-be-passed-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Methods arguments may be passed by value or by reference. The first one is the default behavior, and the second one is optional: it is identified with the `&`, before the name of the argument.

When an argument is passed by reference, the calling context passes a variable, and conserves a handle to the modified variable after the execution of the method. The handle points to a data container, such as a variable, a property, a static property or a array item. 

When passing literal values or constants, global or class, this error is emitted, as there cannot be a reference to them. They can only be passed by value.

This error message is emitted when a value is returned, and feed into a reference argument.

## Example

```php
<?php

function foo(int &$int) {
    // doSomething
}

foo(-3);

?>
```

## Literal Examples
+ foo(): Argument #3 ($int) could not be passed by reference

## Alternatives
+ Store the value in a variable, and pass the variable to the method.
+ Remove the reference from the called method signature.

## Related error messages
+ [only-variable-references-should-be-returned-by-reference](only-variable-references-should-be-returned-by-reference.html)

In previous PHP versions, this error message used to be :ref:`%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference`.