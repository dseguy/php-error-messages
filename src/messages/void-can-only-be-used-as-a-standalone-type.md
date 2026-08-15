# Void can only be used as a standalone type

## Description
`void` is a special return type, indicating that a function or method returns no useful value. Since it represents the absence of a value, it cannot be combined with other types in a union, nor made nullable: it can only be used on its own, as the sole return type of a function or method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/void-can-only-be-used-as-a-standalone-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/void-can-only-be-used-as-a-standalone-type.html","name":"Void can only be used as a standalone type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:32:15 +0000","dateModified":"Wed, 05 Aug 2026 11:32:15 +0000","description":"``void`` is a special return type, indicating that a function or method returns no useful value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/void-can-only-be-used-as-a-standalone-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo(): int|void {}

?>
```

## Alternatives
+ Remove the other types, and use ``void`` alone.
+ Remove ``void``, and keep the other type(s) alone.

## Related error messages
+ [never-can-only-be-used-as-a-standalone-type](never-can-only-be-used-as-a-standalone-type.html)
+ [type-mixed-can-only-be-used-as-a-standalone-type](type-mixed-can-only-be-used-as-a-standalone-type.html)
+ [a-void-%s-must-not-return-a-value](a-void-%s-must-not-return-a-value.html)
+ [void-cannot-be-used-as-a-parameter-type](void-cannot-be-used-as-a-parameter-type.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()