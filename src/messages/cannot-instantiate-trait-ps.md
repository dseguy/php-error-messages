# Cannot instantiate trait %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-trait-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-trait-ps.html","name":"Cannot instantiate trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-12T21:08:01+01:00","dateModified":"2026-07-25T18:45:01+02:00","description":"Traits cannot be instantiated directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-trait-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Traits cannot be instantiated directly. They need to be `used` in a class, or another trait, which will also need to be used in a class.

## Example

```php
<?php

trait T {}

//Cannot instantiate trait T
new T();

?>
```

## Literal Examples
+ Cannot instantiate trait t

## Alternatives
+ Use one of the class using that trait.
+ Rewrite the trait into an class.

## Related error messages
+ [cannot-instantiate-enum-%s](cannot-instantiate-enum-%s.html)
+ [cannot-instantiate-interface-%s](cannot-instantiate-interface-%s.html)
+ [trait-%s-used-by-%s-is-deprecated%s](trait-%s-used-by-%s-is-deprecated%s.html)
