# Undefined property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-property-%s::$%s.html","name":"Undefined property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-31T11:06:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This error is reported when reading an undefined property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when reading an undefined property. The property must be defined before usage, or, in older PHP versions, the property must have been assigned.

This error is related to properties: a different error is emitted for static properties.

## Example

```php
<?php

class X {
	public $a = 1;
}

$x = new X;
echo $x->a;
echo $x->b;

?>
```

## Literal Examples
+ Undefined property x::$b

## Alternatives
+ Define the property before using it.
+ Fix the name of the property, and replace it with an existing one.
+ Define the magic property method __get() to make any property available.

## Related error messages
+ [access-to-undeclared-static-property-%s::$%s](access-to-undeclared-static-property-%s::$%s.html)
+ [property-%s-does-not-exist](property-%s-does-not-exist.html)
+ [property-%s::$%s-does-not-exist](property-%s::$%s-does-not-exist.html)
