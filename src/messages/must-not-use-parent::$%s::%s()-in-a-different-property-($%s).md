# Must not use parent::$%s::%s() in a different property ($%s)

## Description
Property hooks are actual methods: they can call other methods to fulfill their mission. They may also call the parent' methods, and, as such, they may also call the parent's property hook. This has lead to the syntax `parent::$properpty::get()`.

This syntax is specific to property hooks, and can only be used inside the same property hook for the same property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-use-parent::$%s::%s()-in-a-different-property-($%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-use-parent::$%s::%s()-in-a-different-property-($%s).html","name":"Must not use parent::$%s::%s() in a different property ($%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Property hooks are actual methods: they can call other methods to fulfill their mission","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-use-parent::$%s::%s()-in-a-different-property-($%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public string $q { 
        get => 'in parent';
    }
}

class Y extends X {
    public string $property { 
        // Must not use parent::$q::get() in a different property ($property)
        get => parent::$q::get();
    }
}

$y = new Y;
echo $y->q;

?>
```

## Literal Examples
+ Must not use parent::$q::get() in a different property ($p)

## Alternatives
+ Move the block of the property hook in a regular method and call it from the hook and other methods.
+ Inline the code every time it is needed.

## Related error messages
+ [must-not-use-parent::$%s::%s()-in-a-different-property-hook-(%s)](asdf)
+ [must-not-use-parent::$%s::%s()-outside-a-property-hook](asdf)
