# namespace\%s is an invalid class name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-%s-is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-%s-is-an-invalid-class-name.html","name":"namespace\\%s is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-04T21:25:09+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"This is the unquoted counterpart of the ``'namespace\\%s' is an invalid class name`` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/namespace-%s-is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the unquoted counterpart of the `'namespace\%s' is an invalid class name` error: it carries the exact same runtime message, just without the surrounding single quotes PHP actually prints around the offending name.

`namespace` used at the start of a fully qualified name refers to the current namespace, and is usually omitted. `self` describes the current class: it is a relative class name with no absolute-path equivalent, so writing it as `namespace\self` (or the equivalent `\self`) is meaningless and rejected. The same applies to `static` and `parent`.

## Example

```php
<?php

function foo(namespace\self $a) {};

function foo( $a): namespace\self {};

class X {
    private namespace\self $f;
    private namespace\x $f2;
}

?>
```

## Literal Examples
+ namespace\self is an invalid class name

## Alternatives
+ Remove the initial namespace and backslash.
+ Use the literal name of the intended class.

## Related error messages
+ [is-an-invalid-class-name](is-an-invalid-class-name.html)
+ ['-%s'-is-an-invalid-class-name](-%s-is-an-invalid-class-name.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()