# Cannot redeclare %s%s::$%s as %s%s::$%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html","name":"Cannot redeclare %s%s::$%s as %s%s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-04T21:25:09+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"A non-``private`` property redeclared in a child class must keep the same ``static``\/non-``static`` nature as in the parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-%s%s::$%s-as-%s%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A non-`private` property redeclared in a child class must keep the same `static`/non-`static` nature as in the parent class. A static property belongs to the class itself, while a non-static property belongs to each instance; the two are fundamentally different storage locations, so a child class cannot silently turn one into the other while inheriting from the same family.

Here, `X::$property` is declared `static`, and `Y` redeclares it as an instance property, which is rejected.

This is a distinct check from the one that reports `readonly` conflicts between parent and child properties: that message uses the literal word "property" (as in `Cannot redeclare readonly property X::$property as non-readonly Y::$property`), while the static/non-static check never does.

## Example

```php
<?php

class X {
    protected static $property;
}

class Y extends X {
    protected $property;
}

?>
```

## Literal Examples
+ Cannot redeclare static X::$property as non static Y::$property
+ Cannot redeclare non static X::$property as static Y::$property

## Alternatives
+ Make both declarations static.
+ Make both declarations non-static.
+ Remove the redeclaration in the child class, and inherit the parent property as-is.

## Related error messages
+ [cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s](cannot-redeclare-%s-property-%s::$%s-as-%s-%s::$%s.html)
+ [cannot-override-final-property-%s::$%s](cannot-override-final-property-%s::$%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()