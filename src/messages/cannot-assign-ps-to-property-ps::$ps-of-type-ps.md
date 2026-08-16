# Cannot assign %s to property %s::$%s of type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-%s-to-property-%s::$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-%s-to-property-%s::$%s-of-type-%s.html","name":"Cannot assign %s to property %s::$%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error signals that the wrong type of data was used when assigning a value to a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-%s-to-property-%s::$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error signals that the wrong type of data was used when assigning a value to a property. When a type is set on a property, it is always expected to receive that type.

## Example

```php
<?php

class X {
    public int $property;
}

$x = new X;
$x->property = 'de';

?>
```

## Literal Examples
+ Cannot assign string to property X::$property of type int

## Alternatives
+ Add the type of this value to the type description.
+ Remove the type on the property.
+ Cast the value to the correct type.
