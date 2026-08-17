# Type of %s::$%s must be omitted to match the parent definition in class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-ps::$ps-must-be-omitted-to-match-the-parent-definition-in-class-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-ps::$ps-must-be-omitted-to-match-the-parent-definition-in-class-ps.html","name":"Type of %s::$%s must be omitted to match the parent definition in class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-07T22:26:09+01:00","dateModified":"2025-11-07T22:26:09+01:00","description":"A property cannot be redefined, by adding the ``mixed`` type to it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-of-ps::$ps-must-be-omitted-to-match-the-parent-definition-in-class-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A property cannot be redefined, by adding the `mixed` type to it. It looks like untyped property and mixed type property should behave the same, but they are not: in particular, typed properties have an 'uninitialized' state, which yields fatal errors when the property is read, which does not apply to untyped properties.

## Example

```php
<?php

class Foo
{
    public $property;
}

class Bar extends Foo
{
    public mixed $property;
}

?>
```

## Literal Examples
+ Type of X::$p must be omitted to match the parent definition in class X

## Alternatives
+ Add the ``mixed`` type to the parent property definition.
+ Remove the ``mixed`` type from the child property definition.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()