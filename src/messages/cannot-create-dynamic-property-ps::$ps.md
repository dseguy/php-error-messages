# Cannot create dynamic property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-dynamic-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-dynamic-property-ps::$ps.html","name":"Cannot create dynamic property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-14T22:19:52+02:00","dateModified":"2025-07-04T15:29:49+02:00","description":"It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-dynamic-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object. This is valid for both normal and static properties.

This error message also appears when the class is readonly: then, it is not possible to create any dynamic property.

## Example

```php
<?php

enum E: int {
    case Foo = 0;
}

$variable = E::Foo;
$variable->property = 1;

readonly class X {}

$x = new X;
$x->p = 1;

?>
```

## Literal Examples
+ Cannot create dynamic property E::$property

## Alternatives
+ Don't create a property on an enumeration.
+ Don't create a property on a readonly class.
+ Encapsulate the enumeration in an another class, and set the property on this class.
