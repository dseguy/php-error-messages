# __clone method called on non-object

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/clone-method-called-on-non-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/clone-method-called-on-non-object.html","name":"__clone method called on non-object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-19T18:12:50+01:00","dateModified":"2025-11-23T22:22:32+01:00","description":"This error signals an attempt at cloning a value that is not an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/clone-method-called-on-non-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error signals an attempt at cloning a value that is not an object. Indeed, anything but an object triggers this error: boolean, array, string, etc.

Note that it is possible to clone a constant since PHP 8.1, so it is legit to use clone on a constant.

## Example

```php
<?php

$a = clone array();

$b = null; 
clone null;

const C = new Stdclass();
clone C;

?>
```

## Alternatives
+ Check the data before cloning it, with is_object() or instanceof.

## Related error messages
+ [can-only-throw-objects](can-only-throw-objects.html)

In more recent PHP versions, this error message is now :ref:`clone():-argument-#1-($object)-must-be-of-type-object,-%s-given`.