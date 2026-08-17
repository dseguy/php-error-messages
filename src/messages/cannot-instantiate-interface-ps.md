# Cannot instantiate interface %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-interface-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-interface-ps.html","name":"Cannot instantiate interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-14T23:20:06+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"An interface represents an abstract class, and cannot be instantiated alone","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-interface-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An interface represents an abstract class, and cannot be instantiated alone. For that, the interface must be implemented by a class, aka, it must be specified with the `implements` keyword.

## Example

```php
<?php

interface I {}

//Cannot instantiate interface I
new I();

class XI implements I {
}

new XI(); 

?>
```

## Literal Examples
+ Cannot instantiate interface i

## Alternatives
+ Implement the interface with a class and use that class.

## Related error messages
+ [cannot-instantiate-trait-%s](cannot-instantiate-trait-%s.html)
+ [cannot-instantiate-enum-%s](cannot-instantiate-enum-%s.html)
