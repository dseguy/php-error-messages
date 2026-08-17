# Case %s::%s does not exist

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-ps::ps-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-ps::ps-does-not-exist.html","name":"Case %s::%s does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-03T23:13:10+02:00","dateModified":"2025-04-06T10:11:59+02:00","description":"This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-ps::ps-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported by the Reflection API, when trying to generate the informational object `ReflectionEnumUnitCase`, with a non-existing Case.

## Example

```php
<?php

enum E {
    case a;
}

$reflectionEnum = new ReflectionEnum(E::class);
$reflectionEnum->getCase('b');


?>
```

## Literal Examples
+ Case E::b does not exist

## Alternatives
+ Make sure the case exists before trying to instantiate its relate object.
