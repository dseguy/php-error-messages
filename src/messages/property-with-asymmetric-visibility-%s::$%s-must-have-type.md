# Property with asymmetric visibility %s::$%s must have type

## Description
Asymmetric visibility, such as `protected(set)` only applies to a typed property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-with-asymmetric-visibility-%s::$%s-must-have-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-with-asymmetric-visibility-%s::$%s-must-have-type.html","name":"Property with asymmetric visibility %s::$%s must have type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Asymmetric visibility, such as ``protected(set)`` only applies to a typed property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-with-asymmetric-visibility-%s::$%s-must-have-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
	static protected(set) int $property;
}

?>
```

## Literal Examples
+ Property with asymmetric visibility x::$property must have type

## Alternatives
+ Remove the asymmetric property.
+ Add a type to the property.
