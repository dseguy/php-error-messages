# Typed property %s::$%s must not be accessed before initialization

## Description
Typed properties are undefined until they are assigned for the first time. Such happens with a default value, or at the first assignation. 

The difference with untyped values, is that PHP emits that error when the property is not typed. On the other hand, an undefined property gets a NULL value instead. 

The coalesce ??, isset() and empty() operators may be used to check if the property exists, even when it is not defined. Be careful to avoid confusing an undefined property and its empty equivalent.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-property-%s::$%s-must-not-be-accessed-before-initialization.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-property-%s::$%s-must-not-be-accessed-before-initialization.html","name":"Typed property %s::$%s must not be accessed before initialization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Typed properties are undefined until they are assigned for the first time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/typed-property-%s::$%s-must-not-be-accessed-before-initialization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    class X {
    	public int $property;
    }
    
    $x = new X;
    echo $x->p;

?>
```

## Literal Examples
+ Typed property x::$p must not be accessed before initialization

## Alternatives
+ Give a default value to the property.
+ Remove usage of unset() on properties, as they are then reset to uninitialized state.
+ Set the value of the property in the constructor.
+ Use isset(), empty() or ?? to check the status of the property before usage.

## Related error messages
+ [attempt-to-unset-static-property-%s::$%s](attempt-to-unset-static-property-%s::$%s.html)
+ [object-not-initialized](object-not-initialized.html)
+ [typed-static-property-%s::$%s-must-not-be-accessed-before-initialization](typed-static-property-%s::$%s-must-not-be-accessed-before-initialization.html)
+ [default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value](default-value-for-property-of-type-%s-may-not-be-null.-use-the-nullable-type-%s-to-allow-null-default-value.html)

## Related error messages
+ [Typed property must not be accessed before initialization](https://madewithlove.com/blog/typed-property-must-not-be-accessed-before-initialization/)
