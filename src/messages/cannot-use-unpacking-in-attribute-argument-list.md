# Cannot use unpacking in attribute argument list

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-unpacking-in-attribute-argument-list.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-unpacking-in-attribute-argument-list.html","name":"Cannot use unpacking in attribute argument list","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-unpacking-in-attribute-argument-list.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Attribute arguments are compiled into constant expressions, and evaluated only when the attribute is read through Reflection. The spread/unpacking operator `...` needs a runtime array to unpack, which conflicts with this compile time, constant-only nature of attribute arguments.

Unpacking is therefore not allowed in the argument list of an attribute, even when the array being spread only contains constant values.

## Example

```php
<?php

#[Attribute]
class MyAttribute
{
    public function __construct(int $a, int $b) {}
}

$args = [1, 2];

#[MyAttribute(...$args)]
class X {}

?>
```

## Alternatives
+ List each argument explicitly, instead of unpacking an array.
+ Use named arguments instead, if this improves readability.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()