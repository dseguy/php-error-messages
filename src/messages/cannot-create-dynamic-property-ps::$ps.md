# Cannot create dynamic property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-dynamic-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-dynamic-property-%s::$%s.html","name":"Cannot create dynamic property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to add a property to an enumeration, and it is also not possible to create a property dynamically, on an enumeration object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-dynamic-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
