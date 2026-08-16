# Cannot modify readonly property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-property-%s::$%s.html","name":"Cannot modify readonly property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"readonly properties can only be set once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
readonly properties can only be set once. 

When such property is set in the constructor, there should not be another assignation of this property in another method: it would fail. 

When the property is set in another method, then, such method shall only be called once. 

They also should be set from their original class (or its children) and not from the public space.

## Example

```php
<?php

class X {
	public readonly int $property;
	public int $other;
}

$x = new X;
$x->other = 3;
$x->property = 5;

?>
```

## Literal Examples
+ Cannot modify readonly property x::$property

## Alternatives
+ Drop the readonly option.
+ Create an accessor to set the property in the correct context.

## Related error messages
+ [cannot-modify-readonly-object-of-class-%s](cannot-modify-readonly-object-of-class-%s.html)
