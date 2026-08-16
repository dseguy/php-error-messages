# Cannot override final property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-property-%s::$%s.html","name":"Cannot override final property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"A property that is private for writing, is automatically considered ``final``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-override-final-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A property that is private for writing, is automatically considered `final`. That is, it cannot be redeclared in a child class, with a different visibility.

## Example

```php
<?php

class X {
	public private(set) int $property;
}

class Y extends X {
	public int $property;
}

new Y;

?>
```

## Literal Examples
+ Cannot override final property X::$property

## Alternatives
+ Remove the asymmetric visibility from the parent class.
+ Remove the property declaration from the child class.
+ Add the ``final`` keyword to the property declaration in the parent (and adapt the children).

## Related error messages
+ [cannot-redeclare-%s%s::$%s-as-%s%s::$%s](cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html)
