# Cannot use the abstract modifier on a property

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-abstract-modifier-on-a-property.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-abstract-modifier-on-a-property.html","name":"Cannot use the abstract modifier on a property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Properties cannot be abstract, as they are always available in the class where they are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-the-abstract-modifier-on-a-property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Properties cannot be abstract, as they are always available in the class where they are defined. 

This will change in PHP 8.4, with property hooks and abstract hooks. Until then, abstract properties are not valid.

## Example

```php
<?php

abstract class X {
    public abstract string $x;
}

?>
```

## Alternatives
+ Upgrade to PHP 8.4, and use hooked properties.
+ Remove the abstract keyword.
+ Use magic methods ``__get`` and ``__set`` to define a custom alternative property.

In more recent PHP versions, this error message is now :ref:`only-hooked-properties-may-be-declared-abstract`.