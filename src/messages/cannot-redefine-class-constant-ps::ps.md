# Cannot redefine class constant %s::%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redefine-class-constant-ps::ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redefine-class-constant-ps::ps.html","name":"Cannot redefine class constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"PHP does not allow the same constant twice in the same class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redefine-class-constant-ps::ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP does not allow the same constant twice in the same class. The constant may be declared several times in different classes, including extending or extended ones, or in trait, as each case has conflict resolution mechanisms.

## Example

```php
<?php

class C {
    const FOO = hello;
    const FOO = hello again;
}

?>
```

## Literal Examples
+ Cannot redefine class constant C::FOO

## Alternatives
+ Rename one of the conflicting constants.
+ Remove one of the conflicting constants.

## Related error messages
+ [a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching](a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()