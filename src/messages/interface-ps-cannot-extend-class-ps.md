# Interface %s cannot extend class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-ps-cannot-extend-class-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-ps-cannot-extend-class-ps.html","name":"Interface %s cannot extend class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-14T18:09:14+02:00","dateModified":"2025-09-14T18:09:14+02:00","description":"An interface must extends another interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-ps-cannot-extend-class-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An interface must extends another interface. It cannot extends a class, nor a trait, nor an enum.

Also, a class cannot extends an interface: it must implement it.

## Example

```php
<?php

class X {}

interface I extends X {} 

?>
```

## Literal Examples
+ Interface I cannot extend class C

## Alternatives
+ Turn the original class into an interface.
+ Make the original interface into an class.
+ Split the class into a class and an interface, and extends the latter.
