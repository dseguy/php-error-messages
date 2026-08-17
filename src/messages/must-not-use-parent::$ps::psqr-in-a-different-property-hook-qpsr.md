# Must not use parent::$%s::%s() in a different property hook (%s)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-use-parent::$ps::psqr-in-a-different-property-hook-qpsr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-use-parent::$ps::psqr-in-a-different-property-hook-qpsr.html","name":"Must not use parent::$%s::%s() in a different property hook (%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-10T10:20:31+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Property hooks are actual methods: they can call other methods to fulfill their mission","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-use-parent::$ps::psqr-in-a-different-property-hook-qpsr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Property hooks are actual methods: they can call other methods to fulfill their mission. They may also call the parent' methods, and, as such, they may also call the parent's property hook. This has lead to the syntax `parent::$properpty::get()`.

This syntax is specific to property hooks, and can only be used inside the same property hook for the same property.

## Example

```php
<?php

class X {
    public string $q { 
        get => 'in parent';
    }
}

class Y extends X {
    public string $q { 
        // Must not use parent::$q::get() in a different property hook ($p)
        set => parent::$q::get();
    }
}

$y = new Y;
echo $y->q;

?>
```

## Literal Examples
+ Must not use parent::$q::get() in a different property hook ($p)

## Alternatives
+ Move the block of the property hook in a regular method and call it from the hook and other methods.
+ Inline the code every time it is needed.

## Related error messages
+ [must-not-use-parent::$%s::%s()-in-a-different-property-($%s)](must-not-use-parent::$%s::%s\(\)-in-a-different-property-\($%s\).html)
+ [must-not-use-parent::$%s::%s()-outside-a-property-hook](must-not-use-parent::$%s::%s\(\)-outside-a-property-hook.html)
