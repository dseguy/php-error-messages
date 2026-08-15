# Property x::$p cannot have type void

## Description
Void is a type, that can only be used with return type, on methods or functions. Here, void represents the absence of value: this is not possible for a property or an argument. The null value is then the closest possible type that can be assigned to a property, yet representing no value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-x::$p-cannot-have-type-void.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-x::$p-cannot-have-type-void.html","name":"Property x::$p cannot have type void","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Void is a type, that can only be used with return type, on methods or functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-x::$p-cannot-have-type-void.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    private void $property;
}

?>
```

## Alternatives
+ Use another type for the property.
+ Remove the property.
+ Use the null type.

## Related error messages
+ [void-cannot-be-used-as-a-parameter-type](asdf)

## Related error messages
+ [ThethreenothingsofPHP](https://www.exakat.io/en/the-three-nothings-of-php/)
