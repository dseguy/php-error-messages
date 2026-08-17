# Cannot assign %s to reference held by property %s::$%s of type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-ps-to-reference-held-by-property-ps::$ps-of-type-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-ps-to-reference-held-by-property-ps::$ps-of-type-ps.html","name":"Cannot assign %s to reference held by property %s::$%s of type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-06-05T07:26:37+02:00","dateModified":"2025-06-05T07:26:37+02:00","description":"When a variable holds a reference to a property, it also has to satisfy the type constraints","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-ps-to-reference-held-by-property-ps::$ps-of-type-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a variable holds a reference to a property, it also has to satisfy the type constraints. Here, by using a typed reference, the `$var` variable looks like another local variable, but it is in fact typed.

## Example

```php
<?php

class X {
    public static int $int = 1;
}

$var = &X::$int;

$var = 'abc';
?>
```

## Literal Examples
+ Cannot assign string to reference held by property X::$int of type int

## Alternatives
+ Remove the type from the property.
+ Use a valid value to the property.
+ Remove the initial link to the property until the value is of the correct type.
