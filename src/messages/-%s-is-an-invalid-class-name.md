# '\%s' is an invalid class name

## Description
`self` describes the current class. It is a relative class name, as it has no literal value. 

As such, it doesn't have an absolute path version, such as `\self`. Hence, the error emitted there.

This error is also emitted for `static` and `parent`. 

It was possible to circumvent this check until PHP 8.1, with `namespace\%s` syntax, where `namespace` represents the current namespace.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'-%s'-is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'-%s'-is-an-invalid-class-name.html","name":"'\\%s' is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 17:47:19 +0000","dateModified":"Thu, 13 Aug 2026 17:47:19 +0000","description":"``self`` describes the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'-%s'-is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [type-declaration-'%s'-must-be-unqualified](asdf)
+ [namespace-%s-is-an-invalid-class-name](asdf)
