# Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-an-object-as-a-backing-array-for-ps-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-an-object-as-a-backing-array-for-ps-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html","name":"Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-18T06:36:11+01:00","dateModified":"2026-03-31T11:06:56+02:00","description":"It is not allowed anymore to create an ``ArrayObject`` based on an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-an-object-as-a-backing-array-for-ps-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not allowed anymore to create an `ArrayObject` based on an object. This leads to many unexpected behaviors, that are not supported anymore by PHP.

## Example

```php
<?php

$object = new stdClass;
$object->a = 1;

new ArrayObject($object);

?>
```

## Literal Examples
+ Using an object as a backing array for ``ArrayObject`` is deprecated, as it allows violating class constraints and invariants

## Alternatives
+ Cast the object to array before using it with ``ArrayObject``.
+ Do not use ``ArrayObject``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()