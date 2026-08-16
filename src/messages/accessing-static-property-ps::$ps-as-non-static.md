# Accessing static property %s::$%s as non static

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-property-%s::$%s-as-non-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-property-%s::$%s-as-non-static.html","name":"Accessing static property %s::$%s as non static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-19T11:18:15+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The ``property`` property is declared as static, and should be access with the ``::`` operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/accessing-static-property-%s::$%s-as-non-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `property` property is declared as static, and should be access with the `::` operator. 

Accessing that property with the `->` or `?->` object operators is quite safe, as there is no confusion with the name of the property, and the object holds the name of the host class.

On the other hand, using the object operators does not provide accurate information about the actual property.

## Example

```php
<?php

class X {
    public static $property = 1;
}

$x = new X;
echo $x->property;

?>
```

## Literal Examples
+ Accessing static property X::$property as non static

## Alternatives
+ Use the ``::`` operator to access static properties.
+ Drop the ``static`` option on the property.
