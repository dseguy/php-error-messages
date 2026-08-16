# Only variables should be passed by reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variables-should-be-passed-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variables-should-be-passed-by-reference.html","name":"Only variables should be passed by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-19T18:12:50+01:00","dateModified":"2026-04-10T10:53:29+02:00","description":"Methods arguments may be passed by value or by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variables-should-be-passed-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Methods arguments may be passed by value or by reference. The first one is the default behavior, and the second one is optional: it is identified with the `&`, before the name of the argument.

When an argument is passed by reference, the calling context passes a variable, and conserves a handle to the modified variable after the execution of the method. The handle points to a data container, such as a variable, a property, a static property or a array item. 

When passing literal values or constants, global or class, a distinct error is emitted, as there cannot be a reference to them. They can only be passed by value.

This error message is emitted when a value is returned, and feed into a reference argument.

## Example

```php
<?php

function foo(int &$int) {
    // doSomething
}

// the result of a function is still a literal value
foo(abs(-3));
// a direct literal value generates that error
foo(3);

// This one is a notice
enum E {
    case A;
    case B;
    case C;
}
usort(E::cases());
//The sort won't be visible, as the array is not accessible and must be called again, unsorted.

?>
```

## Alternatives
+ Store the value in a variable, and pass the variable to the method.
+ Remove the reference from the called method signature.

In previous PHP versions, this error message used to be :ref:`only-variables-can-be-passed-by-reference`.