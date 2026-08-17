# A void %s must not return a value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-void-ps-must-not-return-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-void-ps-must-not-return-a-value.html","name":"A void %s must not return a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-01T18:38:04+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"A function, method or closure that uses the ``void`` return type, must not have a ``return`` expression with a parameter, in its body","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-void-ps-must-not-return-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A function, method or closure that uses the `void` return type, must not have a `return` expression with a parameter, in its body. 

This is checked anywhere in the body of the function, at compilation time. 

It is possible to use return, without any argument. It is not possible to `return null`, it must be without argument.

## Example

```php
<?php

function foo() : void {
    return 1;
}

?>
```

## Alternatives
+ Remove the return expression.
+ Remove the argument of the return expression.
+ Remove the void returntype.

## Related error messages
+ [a-void-%s-does-not-return-a-value](a-void-%s-does-not-return-a-value.html)
+ [a-%s-with-return-type-must-return-a-value](a-%s-with-return-type-must-return-a-value.html)
+ [void-can-only-be-used-as-a-standalone-type](void-can-only-be-used-as-a-standalone-type.html)
