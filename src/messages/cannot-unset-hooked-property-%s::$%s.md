# Cannot unset hooked property %s::$%s

## Description
It is not allowed to unset a hooked property, aka, a property with a `get` or `set` (or both) hook.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-hooked-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-hooked-property-%s::$%s.html","name":"Cannot unset hooked property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not allowed to unset a hooked property, aka, a property with a ``get`` or ``set`` (or both) hook","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-hooked-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public string $property {
        get => $this->x;
    }
}

$x = new X;
unset($x->x);

?>
```

## Literal Examples
+ Cannot unset hooked property x::$property

## Alternatives
+ Assign null, or a null value to this property.
+ Reset the property to its default value.
