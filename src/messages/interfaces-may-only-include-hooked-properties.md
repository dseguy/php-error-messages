# Interfaces may only include hooked properties

## Description
PHP 8.4 introduced the support for properties in interfaces. Although, the properties must have a property hook, aka one associated method that deals with `get` and `set` operations on that property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interfaces-may-only-include-hooked-properties.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interfaces-may-only-include-hooked-properties.html","name":"Interfaces may only include hooked properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interfaces-may-only-include-hooked-properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface I {
    public $property;

    public $propertyWithHook {
    	// This is an abstract property
    	get;
    };

}
?>
```

## Alternatives
+ Add an identity hook, such as ``get => $this->property = $value;``, which is the default behavior.
+ Turn the interface into an abstract class.
+ Turn the interface into a trait.

In more recent PHP versions, this error message is now :ref:`interfaces-may-not-include-properties`.