# Static property %s::$%s cannot be readonly

## Description
Static properties cannot use the `readonly` option. `readonly` only support normal properties, and not static properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-property-%s::$%s-cannot-be-readonly.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-property-%s::$%s-cannot-be-readonly.html","name":"Static property %s::$%s cannot be readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Static properties cannot use the ``readonly`` option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/static-property-%s::$%s-cannot-be-readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public static readonly int $property;
}

?>
```

## Literal Examples
+ Static property X::$property cannot be readonly

## Alternatives
+ Remove the readonly option.
+ Turn the static property into a normal property.
