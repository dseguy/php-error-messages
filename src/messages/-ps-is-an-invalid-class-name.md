# '\%s' is an invalid class name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/-ps-is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/-ps-is-an-invalid-class-name.html","name":"'\\%s' is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``self`` describes the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/-ps-is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`self` describes the current class. It is a relative class name, as it has no literal value. 

As such, it doesn't have an absolute path version, such as `\self`. Hence, the error emitted there.

This error is also emitted for `static` and `parent`. 

It was possible to circumvent this check until PHP 8.1, with `namespace\%s` syntax, where `namespace` represents the current namespace.

## Example

```php
<?php

function foo(\self $a) {};

function foo( $a) : \self {};

class X {
    private \self $f;
    private \x $f2;
}

?>
```

## Literal Examples
+ '\self' is an invalid class name
+ '\parent' is an invalid class name
+ '\static' is an invalid class name

## Alternatives
+ Remove the initial backslash.
+ Use the literal name of the intended class.

## Related error messages
+ [type-declaration-'%s'-must-be-unqualified](type-declaration-%s-must-be-unqualified.html)
+ [namespace-%s-is-an-invalid-class-name](namespace-%s-is-an-invalid-class-name.html)
