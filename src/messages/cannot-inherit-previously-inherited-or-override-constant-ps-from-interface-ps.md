# Cannot inherit previously-inherited or override constant %s from interface %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-inherit-previously-inherited-or-override-constant-%s-from-interface-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-inherit-previously-inherited-or-override-constant-%s-from-interface-%s.html","name":"Cannot inherit previously-inherited or override constant %s from interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-12T23:10:02+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-inherit-previously-inherited-or-override-constant-%s-from-interface-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 8.1, it was not possible to override a constant when it was defined in an interface, even with the same definition.

## Example

```php
<?php

interface I {
    const A = 1;
}

class X implements I {
    const A = 2;
}

?>
```

## Literal Examples
+ Cannot inherit previously-inherited or override constant x from interface i

## Alternatives
+ Remove the constant from the class.
+ Remove the constant from the interface.
+ Move to PHP 8.1 or more recent.
