# Cannot redeclare %s property %s::$%s as %s %s::$%s

## Description
A property must be always `readonly` or non-readonly, in every classes of the same family. It cannot alternate between the two options, with inheritance.

The same applies also to the `static` option of properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html","name":"Cannot redeclare %s property %s::$%s as %s %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"A property must be always ``readonly`` or non-readonly, in every classes of the same family","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    private readonly $property;
}

class Y extends X {
    private $property;
}

?>
```

## Literal Examples
+ Cannot redeclare readonly property X::$property as non-readonly Y::$property
+ Cannot redeclare non-readonly property X::$property as readonly Y::$property
+ Cannot redeclare static property X::$property as non-static Y::$property
+ Cannot redeclare non-static property X::$property as static Y::$property

## Alternatives
+ Make all the property definitions ``readonly``.
+ Make all the property definitions non-``readonly``.
+ Remove some the conflicting property definitions.

## Related error messages
+ [cannot-redeclare-%s%s::$%s-as-%s%s::$%s](asdf)
