# Dynamic class names are not allowed in compile-time class constant references

## Description
It is not possible to create a constant while using a variable, or similar containers. The expression must be static.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html","name":"Dynamic class names are not allowed in compile-time class constant references","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to create a constant while using a variable, or similar containers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/dynamic-class-names-are-not-allowed-in-compile-time-class-constant-references.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
