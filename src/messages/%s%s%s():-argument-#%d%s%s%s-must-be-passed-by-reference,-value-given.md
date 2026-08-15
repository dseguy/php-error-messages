# %s%s%s(): Argument #%d%s%s%s must be passed by reference, value given

## Description
When a parameter is set to be passed by reference, there is a `&` character before its name. In that case, the argument must be a data container, such as a variable, a property, a static property, an array index, but it cannot be a literal value, a constant, or the result of an expression.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s():-argument-#%d%s%s%s-must-be-passed-by-reference,-value-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s():-argument-#%d%s%s%s-must-be-passed-by-reference,-value-given.html","name":"%s%s%s(): Argument #%d%s%s%s must be passed by reference, value given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"When a parameter is set to be passed by reference, there is a ``&`` character before its name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s():-argument-#%d%s%s%s-must-be-passed-by-reference,-value-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(&$a) {}

// invalid cases
foo(1);
foo(1 + 2);

const A = 1;
foo(A);

class X {
    const B = 2;
}
foo(X::B);

?>
```

## Literal Examples
+ foo(): Argument #1 ($a) must be passed by reference, value given

## Alternatives
+ Store the value in a variable and passe the variable.
+ Remove the reference in the method signature.

## Related error messages
+ [cannot-pass-parameter-%d-by-reference](asdf)

In previous PHP versions, this error message used to be :ref:`parameter-%d-must-be-passed-by-reference`.