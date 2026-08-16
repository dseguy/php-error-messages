# Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants

## Description
It is not allowed anymore to create an `ArrayObject` based on an object. This leads to many unexpected behaviors, that are not supported anymore by PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html","name":"Using an object as a backing array for %s is deprecated, as it allows violating class constraints and invariants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"It is not allowed anymore to create an ``ArrayObject`` based on an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-an-object-as-a-backing-array-for-%s-is-deprecated,-as-it-allows-violating-class-constraints-and-invariants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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