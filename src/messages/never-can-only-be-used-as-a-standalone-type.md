# never can only be used as a standalone type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-can-only-be-used-as-a-standalone-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-can-only-be-used-as-a-standalone-type.html","name":"never can only be used as a standalone type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"``never`` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls ``exit()``, or otherwise never completes normally","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/never-can-only-be-used-as-a-standalone-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`never` is a special return type, indicating that a function or method never returns control to its caller: it always throws, calls `exit()`, or otherwise never completes normally.

Because `never` represents the absence of any return at all, it cannot be combined with other types in a union, nor made nullable: it can only be used on its own, as the sole return type of a function or method.

## Example

```php
<?php

function foo(): int|never {}

?>
```

## Alternatives
+ Remove the other types, and use ``never`` alone.
+ Remove ``never``, and keep the other type(s) alone.

## Related error messages
+ [void-can-only-be-used-as-a-standalone-type](void-can-only-be-used-as-a-standalone-type.html)
+ [type-mixed-can-only-be-used-as-a-standalone-type](type-mixed-can-only-be-used-as-a-standalone-type.html)
+ [a-never-returning-%s-must-not-return](a-never-returning-%s-must-not-return.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()