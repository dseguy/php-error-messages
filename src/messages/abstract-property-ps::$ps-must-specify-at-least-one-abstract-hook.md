# Abstract property %s::$%s must specify at least one abstract hook

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-ps::$ps-must-specify-at-least-one-abstract-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-ps::$ps-must-specify-at-least-one-abstract-hook.html","name":"Abstract property %s::$%s must specify at least one abstract hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-13T11:03:18+02:00","dateModified":"2026-07-13T20:51:12+02:00","description":"An abstract property must have at least one of its hooks declared without a body (abstract)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/abstract-property-ps::$ps-must-specify-at-least-one-abstract-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An abstract property must have at least one of its hooks declared without a body (abstract). If all hooks have implementations, the property cannot be abstract, as there is nothing left for child classes to implement.

This is a PHP 8.4 language-level restriction enforced for abstract properties with hooks. An abstract property's purpose is to require child classes to provide an implementation, but if all hooks already have bodies, there is no requirement to fulfill.

## Example

```php
<?php

abstract class X {
    abstract public string $property {
        get { return ''; }
        set { }
    }
}

?>
```

## Literal Examples
+ Abstract property x::$property must specify at least one abstract hook

## Alternatives
+ Make at least one hook abstract by removing its body block, e.g. change ``get { return ''; }`` to ``get;``.
+ Remove the ``abstract`` keyword from the property if all hooks should have implementations.

## Related error messages
+ [only-hooked-properties-may-be-declared-abstract](only-hooked-properties-may-be-declared-abstract.html)
+ [abstract-property-hook-cannot-have-body](abstract-property-hook-cannot-have-body.html)
+ [non-abstract-property-hook-must-have-a-body](non-abstract-property-hook-must-have-a-body.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()