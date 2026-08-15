# void cannot be used as a parameter type

## Description
Void is a type, that can only be used with return type, on methods or functions. Here, void represents the absence of value: this is not possible for a property or an argument. The null value is then the closest possible type that can be assigned to a property, yet representing no value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/void-cannot-be-used-as-a-parameter-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/void-cannot-be-used-as-a-parameter-type.html","name":"void cannot be used as a parameter type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Void is a type, that can only be used with return type, on methods or functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/void-cannot-be-used-as-a-parameter-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

  function foo(void $p) { }

?>
```

## Alternatives
+ Use another type for the argument.
+ Remove the argument.
+ Use the null type.

## Related error messages
+ [property-x::$p-cannot-have-type-void](property-x::$p-cannot-have-type-void.html)
+ [void-can-only-be-used-as-a-standalone-type](void-can-only-be-used-as-a-standalone-type.html)

## Related error messages
+ [ThethreenothingsofPHP](https://www.exakat.io/en/the-three-nothings-of-php/)
