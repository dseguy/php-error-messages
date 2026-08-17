# Get hook of backed property %s::%s with set hook may not return by reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-backed-property-ps::ps-with-set-hook-may-not-return-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-backed-property-ps::ps-with-set-hook-may-not-return-by-reference.html","name":"Get hook of backed property %s::%s with set hook may not return by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-04-10T10:53:29+02:00","dateModified":"2026-07-24T19:28:38+02:00","description":"When a property is a virtual property, the ``get`` hook cannot return a reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/get-hook-of-backed-property-ps::ps-with-set-hook-may-not-return-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a property is a virtual property, the `get` hook cannot return a reference.

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