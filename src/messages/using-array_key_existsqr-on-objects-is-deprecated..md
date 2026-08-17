# Using array_key_exists() on objects is deprecated.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-array_key_existsqr-on-objects-is-deprecated..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-array_key_existsqr-on-objects-is-deprecated..html","name":"Using array_key_exists() on objects is deprecated.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-29T12:26:23+01:00","dateModified":"2026-03-06T23:34:30+01:00","description":"``array_key_exists()`` used to accept both arrays and objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-array_key_existsqr-on-objects-is-deprecated..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`array_key_exists()` used to accept both arrays and objects. In array cases, it looks for an index in the array keys, and in the object case, it looks for a property in the public properties. 

`array_key_exists()` only works with array: it doesn't work with `ArrayAccess` object, and yields the same error.

In PHP 7.4, this feature was deprecated, with the eponymous message. In PHP 8.0, it is now turned into a type error: the second argument must be an array.

## Example

```php
<?php

class X {
    public string $property = '';
}

$object = new X();

array_key_exists($object, 'index');

?>
```

## Alternatives
+ Check if the variable is actually an object before using it with array_key_exists().
+ Check if the variable is actually an object before using it with array_key_exists().

## Related error messages
+ [argument-#%d-($%s)-must-be-of-type-%s,-%s-given](argument-#%d-\($%s\)-must-be-of-type-%s,-%s-given.html)

In more recent PHP versions, this error message is now :ref:`argument-#%d-($%s)-must-be-of-type-%s,-%s-given`.