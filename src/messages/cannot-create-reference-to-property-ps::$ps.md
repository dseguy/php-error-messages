# Cannot create reference to property %s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-reference-to-property-ps::$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-reference-to-property-ps::$ps.html","name":"Cannot create reference to property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-15T10:08:31+01:00","dateModified":"2025-07-29T19:56:41+02:00","description":"While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-reference-to-property-ps::$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks. By default, the property hook is returned by value, and cannot accomodate the reference. Unless the property hooks is made by reference, with a `&` before the name of the hook.

The message is also related to using an object in a foreach loop. There is a different message for direct creation of a reference on a property.

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

foreach (new X as $prop => &$value) {
    var_dump($value);
}

?>
```

## Alternatives
+ Add ``&`` before the ``get`` hook.
+ Make the property a normal property, without hooks.
+ Avoid using a reference on a property hook.

## Related error messages
+ [indirect-modification-of-%s::$%s-is-not-allowed](indirect-modification-of-%s::$%s-is-not-allowed.html)
