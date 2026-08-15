# clone(): Argument #1 ($object) must be of type object, %s given

## Description
This is the error message when an attempt of cloning is made on an piece of data that is not an object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/clone():-argument-#1-($object)-must-be-of-type-object,-%s-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/clone():-argument-#1-($object)-must-be-of-type-object,-%s-given.html","name":"clone(): Argument #1 ($object) must be of type object, %s given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This is the error message when an attempt of cloning is made on an piece of data that is not an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/clone():-argument-#1-($object)-must-be-of-type-object,-%s-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

clone(1);

?>
```

## Literal Examples
+ clone(): Argument #1 ($object) must be of type object, int given
+ clone(): Argument #1 ($object) must be of type object, string given
+ clone(): Argument #1 ($object) must be of type object, array given

## Alternatives
+ Check that the cloned value is actually an object.

In previous PHP versions, this error message used to be :ref:`clone-method-called-on-non-object`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()