# Enum %s cannot include properties

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-%s-cannot-include-properties.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-%s-cannot-include-properties.html","name":"Enum %s cannot include properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-03T21:55:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Enumeration cannot define a property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-%s-cannot-include-properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Enumeration cannot define a property. They can only define constants and methods. 

Enum can use a trait, and import several methods. Traits can also define properties, which are mixed with the host. On the other hand, enum cannot define properties: when a trait is used by an enumeration, it should not have any properties. It is also the case for traits of traits.

## Example

```php
<?php

enum D {
   private $p = 1;
}

trait T {
   private int $property; 
}

enum E {
    use T;
}

?>
```

## Alternatives
+ Remove the property from the trait.
+ Split the trait in two traits, and include the new trait that has no property.
