# Enum case value must be compile-time evaluatable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-case-value-must-be-compile-time-evaluatable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-case-value-must-be-compile-time-evaluatable.html","name":"Enum case value must be compile-time evaluatable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-27T10:37:46+01:00","dateModified":"2025-07-29T19:56:41+02:00","description":"The value of a backed enumeration, string or integer, cannot be build with constant (global or classe)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-case-value-must-be-compile-time-evaluatable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The value of a backed enumeration, string or integer, cannot be build with constant (global or classe). It can only be build with literal values. 

This limitation was removed in PHP 8.2.

## Example

```php
<?php

enum Foo: string {
    case A = '/' . A;
    case B = '/' . __FILE__;
}

?>
```

## Alternatives
+ Upgrade to PHP 8.2.
+ Replace the constants with literal values.
