# Dynamic class names are not allowed in compile-time class constant references

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html","name":"Dynamic class names are not allowed in compile-time class constant references","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-15T10:08:31+01:00","dateModified":"2025-04-06T10:11:59+02:00","description":"It is not possible to create a constant while using a variable, or similar containers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to create a constant while using a variable, or similar containers. The expression must be static.

## Example

```php
<?php

$foo = 'a';
const A = $foo::C;

?>
```

## Alternatives
+ Use define().
+ Make the value expression static.
