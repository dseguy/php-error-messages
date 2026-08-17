# Readonly property %s::$%s cannot have default value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-property-ps::$ps-cannot-have-default-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-property-ps::$ps-cannot-have-default-value.html","name":"Readonly property %s::$%s cannot have default value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-03T23:13:10+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"A readonly property is expected to be set once, and only once, at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-property-ps::$ps-cannot-have-default-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A readonly property is expected to be set once, and only once, at execution time. Then, it is not changed anymore. 

A property, whose value is known at compilation time should probably be a constant.

## Example

```php
<?php

class T {
	public readonly int $i = 1;
}

?>
```

## Literal Examples
+ Readonly property x::$i cannot have default value

## Alternatives
+ Drop the readonly option.
+ Make the property a class constant.

## Related error messages
+ [default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value](default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value.html)
