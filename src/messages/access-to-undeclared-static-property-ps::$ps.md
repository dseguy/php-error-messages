# Access to undeclared static property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-to-undeclared-static-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-to-undeclared-static-property-ps::$ps.html","name":"Access to undeclared static property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-06T18:30:06+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This error is reported when reading an undefined static property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-to-undeclared-static-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is reported when reading an undefined static property. The property must be defined before usage, or it yields a Fatal error.

This error is related to static properties: a different error is emitted for non-static properties.

## Example

```php
<?php

class X {
	public static $a = 1;
}

$x = new X;
echo X::$a; // OK
echo X::$b;

$name = 'C';
echo X::${$c}; // dynamic properties

?>
```

## Literal Examples
+ Access to undeclared static property X::$staticProperty

## Alternatives
+ Define the static property in the requested class.
+ Fix the name of the property on that class.
+ Fix the name of the class of the property.
+ Use a non-static property to handle this situation.
+ Use property_exists() or isset() to check if the property exists before using it.
+ Check if the dynamic name of the property is a string, before usage.

## Related error messages
+ [undefined-property-%s::$%s](undefined-property-%s::$%s.html)
