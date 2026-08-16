# Interfaces may not include properties

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interfaces-may-not-include-properties.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interfaces-may-not-include-properties.html","name":"Interfaces may not include properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-26T09:24:47+02:00","dateModified":"2025-03-24T18:28:14+01:00","description":"Interfaces can define methods and constants, but they can't define properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interfaces-may-not-include-properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Interfaces can define methods and constants, but they can't define properties. Actually, they can only define properties with a property hook, as the property hooks are methods.

## Example

```php
<?php

interface I {
	private $property;
}

?>
```

## Alternatives
+ Upgrade PHP version to 8.4.
+ Turn the interface in an abstract class.
+ Turn the interface in a trait.
+ Add a property hook to a property.

In previous PHP versions, this error message used to be :ref:`interfaces-may-only-include-hooked-properties`.