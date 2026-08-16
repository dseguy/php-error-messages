# Cannot auto-initialize an array inside property %s::$%s of type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s.html","name":"Cannot auto-initialize an array inside property %s::$%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-31T11:06:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The last command is using the array syntax on the property ``$property``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-auto-initialize-an-array-inside-property-%s::$%s-of-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The last command is using the array syntax on the property `$property`. In fact, the property is of type `bool`. 

If this was a variable, this would be tolerated, but it cannot happen on a property, which enforces the types at all times. 

Indeed, if the union type `bool|array` is used, the automatic conversion to array is reported.

When the type of the property is `string`, the array syntax is partially supported: it works with integer index, and fails with strings.

## Example

```php
<?php

class X {
    public bool $property = false;
}

$x = new X;
$x->property[4] = 3;

?>
```

## Literal Examples
+ Cannot auto-initialize an array inside property X::$property of type bool
+ Cannot auto-initialize an array inside property X::$property of type int

## Alternatives
+ Convert the type of the property to array.
+ Create a distinct property, with the array type, to use the array syntax.

## Related error messages
+ [cannot-access-offset-of-type-%s-on-%s](cannot-access-offset-of-type-%s-on-%s.html)
+ [automatic-conversion-of-false-to-array-is-deprecated](automatic-conversion-of-false-to-array-is-deprecated.html)
