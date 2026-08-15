# Case %s::%s does not exist

## Description
This error is reported by the Reflection API, when trying to generate the informational object `ReflectionEnumUnitCase`, with a non-existing Case.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s::%s-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s::%s-does-not-exist.html","name":"Case %s::%s does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error is reported by the Reflection API, when trying to generate the informational object ``ReflectionEnumUnitCase``, with a non-existing Case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s::%s-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
