# Indirect modification of %s::$%s is not allowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-%s::$%s-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-%s::$%s-is-not-allowed.html","name":"Indirect modification of %s::$%s is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"While it is possible to create references on object's properties, it is not possible to do so on a property with a hook","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/indirect-modification-of-%s::$%s-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
While it is possible to create references on object's properties, it is not possible to do so on a property with a hook. The property hook is returned by value, by default.

## Example

```php
<?php

class X {
    public $byRef {
        get {
            $x = 42;
            return $x;
        }
    }
}

$x = new X();
$y = &$x->byRef;

?>
```

## Literal Examples
+ Indirect modification of X::$byRef is not allowed

## Alternatives
+ Add ``&`` before the ``get`` hook.
+ Make the property a normal property, without hooks.
+ Avoid using a reference on a property hook.

## Related error messages
+ [cannot-create-reference-to-property-%s::$%s](cannot-create-reference-to-property-%s::$%s.html)
