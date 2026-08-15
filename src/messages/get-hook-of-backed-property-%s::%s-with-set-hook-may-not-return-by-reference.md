# Get hook of backed property %s::%s with set hook may not return by reference

## Description
When a property is a virtual property, the `get` hook cannot return a reference.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html","name":"Get hook of backed property %s::%s with set hook may not return by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 16:14:56 +0000","dateModified":"Fri, 24 Jul 2026 16:14:56 +0000","description":"When a property is a virtual property, the ``get`` hook cannot return a reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-backed-property-%s::%s-with-set-hook-may-not-return-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class A {
    public $prop;
}

class B extends A {
    private $_prop;
    public $prop {
        &get => $this->_prop;
        set { $this->_prop = $value; }
    }
}

?>
```

## Literal Examples
+ Get hook of backed property B::$prop with set hook may not return by reference

## Alternatives
+ Make the virtual property a concrete one.
+ Remove the reference.

## Related error messages
+ [type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type](type-of-parameter-$%s-of-hook-%s::$%s::set-must-be-compatible-with-property-type.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()