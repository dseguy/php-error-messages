# Readonly property %s::$%s must have type

## Description
A `readonly` property must be typed. It cannot be left without a type. In case of need of a wide range of types, use an union type, or the `mixed` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-property-%s::$%s-must-have-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-property-%s::$%s-must-have-type.html","name":"Readonly property %s::$%s must have type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A ``readonly`` property must be typed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-property-%s::$%s-must-have-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    private readonly $property;
}

?>
```

## Literal Examples
+ Readonly property X::$property must have type

## Alternatives
+ Use the ``mixed`` type to explicitly type the property, but not commit to any constraint.
+ Use an union type to explicitly type the property, and commit to a restricted list of types.
+ Use the actual type for the property.
+ Remove the ``readonly`` option.
