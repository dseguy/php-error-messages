# Cannot declare promoted property in an abstract constructor

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-promoted-property-in-an-abstract-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-promoted-property-in-an-abstract-constructor.html","name":"Cannot declare promoted property in an abstract constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-27T16:24:13+02:00","dateModified":"2026-02-25T10:59:01-05:00","description":"It is not possible to use a promoted property in an abstract constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-promoted-property-in-an-abstract-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to use a promoted property in an abstract constructor. The promoted property is akin to concrete code (the property assignation), while the abstrat constructor has no body. 

On the other hand, a child class may overwrite the constructor signature with a promoted property, so it is possible to define properties that way, but not on an abstract method.

In order to enforce a property, from an abstract class, the property must be defined out of the constructor.

## Example

```php
<?php

abstract class X {
	abstract function __construct(private string $a);
}

?>
```

## Alternatives
+ Remove the abstract from the constructor.
+ Define the property outside the construtor.
+ Check all children classes, so they all have the promoted property in their constructor definition.
