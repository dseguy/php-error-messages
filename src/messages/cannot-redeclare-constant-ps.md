# Cannot redeclare constant '%s'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-constant-'%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-constant-'%s'.html","name":"Cannot redeclare constant '%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:31:44 +0000","dateModified":"Sun, 26 Jul 2026 06:31:44 +0000","description":"A constant declared at the top level with the ``const`` keyword can only be declared once per namespace, per request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-constant-'%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A constant declared at the top level with the `const` keyword can only be declared once per namespace, per request. This is a compile-time error, unlike the runtime warning produced when calling `define()` twice with the same constant name.

This error also happens when a file declaring a top-level constant is included more than once without a guard.

## Example

```php
<?php

const FOO = 1;
const FOO = 2;

?>
```

## Literal Examples
+ Cannot redeclare constant 'FOO'

## Alternatives
+ Remove the duplicate ``const`` declaration.
+ Use ``include_once`` or ``require_once`` for files that declare top-level constants.
+ If the constant needs to be conditionally declared, use ``define()`` together with ``defined()`` instead of ``const``.

## Related error messages
+ [constant-%s-already-defined](constant-%s-already-defined.html)
+ [cannot-declare-const-%s-because](cannot-declare-const-%s-because.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()