# Cannot create reference to property %s::$%s

## Description
While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks. By default, the property hook is returned by value, and cannot accomodate the reference. Unless the property hooks is made by reference, with a `&` before the name of the hook.

The message is also related to using an object in a foreach loop. There is a different message for direct creation of a reference on a property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-reference-to-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-reference-to-property-%s::$%s.html","name":"Cannot create reference to property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"While it is possible to acquire a reference on an object's property, it is not possible to acquire that reference on a property with hooks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-reference-to-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
