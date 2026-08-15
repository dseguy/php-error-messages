# Cannot instantiate trait %s

## Description
Traits cannot be instantiated directly. They need to be `used` in a class, or another trait, which will also need to be used in a class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-trait-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-trait-%s.html","name":"Cannot instantiate trait %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"Traits cannot be instantiated directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-trait-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [cannot-instantiate-enum-%s](asdf)
+ [cannot-instantiate-interface-%s](asdf)
+ [trait-%s-used-by-%s-is-deprecated%s](asdf)
