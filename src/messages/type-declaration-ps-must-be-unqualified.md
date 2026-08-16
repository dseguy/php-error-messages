# Type declaration '%s' must be unqualified

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-declaration-'%s'-must-be-unqualified.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-declaration-'%s'-must-be-unqualified.html","name":"Type declaration '%s' must be unqualified","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 17:47:52 +0000","dateModified":"Thu, 13 Aug 2026 17:47:52 +0000","description":"Scalar types are absolute, and shall not be written with the initial ``\\``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-declaration-'%s'-must-be-unqualified.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Scalar types are absolute, and shall not be written with the initial `\`. It is always omitted. 

This error is reported for `string`, `int`, `bool`, `iterable`, `never`, `void`, `object`, `float`, `null`, `mixed`, `true`, `false`.

For some reason, `array` and `callable` are still not reported with this error. `resource` is also ignored, although it is only reserved, and not supported anyway.

## Example

```php
<?php

    function foo(\string $x) {}

?>
```

## Literal Examples
+ Type declaration 'array' must be unqualified
+ Type declaration 'string' must be unqualified
+ Type declaration 'int' must be unqualified
+ Type declaration 'null' must be unqualified

## Alternatives
+ Remove the leading backslash.
+ Remove the whole type.
+ Use a class type, which supports the leading backslash.

## Related error messages
+ [is-an-invalid-class-name](is-an-invalid-class-name.html)
+ ['-%s'-is-an-invalid-class-name](-%s-is-an-invalid-class-name.html)
+ [cannot-use--"%s-"-as-%s-as-it-is-reserved](cannot-use--%s--as-%s-as-it-is-reserved.html)
+ [cannot-use-"%s"-as-a-type-name-as-it-is-reserved](cannot-use-%s-as-a-type-name-as-it-is-reserved.html)
