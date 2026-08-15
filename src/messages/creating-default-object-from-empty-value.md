# Creating default object from empty value

## Description
This deprecation message is emitted in PHP 7.x to signal that an object was created without instantiation. In the illustration code, `$x` does not exist before assigning it a property `a`, and a value. The created object is `stdClass`.

This error is specific to the creation of the variable: if `$x` was set with `null`, a different message was emitted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creating-default-object-from-empty-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creating-default-object-from-empty-value.html","name":"Creating default object from empty value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This deprecation message is emitted in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/creating-default-object-from-empty-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$x->a = 1;

?>
```

## Alternatives
+ Explicitly create the object before accessing its properties.
+ Cast an array to ``(object)``.
+ Instanciate a ``stdClass``.

In more recent PHP versions, this error message is now :ref:`attempt-to-assign-property-"%s"-on-null`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[creatingObjectOnNull](creatingObjectOnNull)