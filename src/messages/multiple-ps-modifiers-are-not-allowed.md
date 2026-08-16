# Multiple %s modifiers are not allowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-%s-modifiers-are-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-%s-modifiers-are-not-allowed.html","name":"Multiple %s modifiers are not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-17T22:59:23+02:00","dateModified":"2026-07-17T22:59:23+02:00","description":"A single modifier keyword (``final``, ``static``, ``readonly``, or a visibility keyword such as ``public``, ``protected``, ``private``) is enough to apply that property to a class member","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/multiple-%s-modifiers-are-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A single modifier keyword (`final`, `static`, `readonly`, or a visibility keyword such as `public`, `protected`, `private`) is enough to apply that property to a class member. Repeating the same kind of modifier twice in a declaration is redundant and rejected by the parser.

This is a generic, templated message: the concrete modifier name takes the place of `%s`. There are dedicated, more specific messages for each modifier family: `final`, `static`, `readonly`, and the access-type (visibility) modifiers.

## Example

```php
<?php

class X {
    final final function foo() {}
}

?>
```

## Literal Examples
+ Multiple final modifiers are not allowed
+ Multiple static modifiers are not allowed
+ Multiple readonly modifiers are not allowed
+ Multiple access type modifiers are not allowed

## Alternatives
+ Remove the duplicate modifier, keeping only one occurrence.

## Related error messages
+ [multiple-final-modifiers-are-not-allowed](multiple-final-modifiers-are-not-allowed.html)
+ [multiple-static-modifiers-are-not-allowed](multiple-static-modifiers-are-not-allowed.html)
+ [multiple-readonly-modifiers-are-not-allowed](multiple-readonly-modifiers-are-not-allowed.html)
+ [multiple-access-type-modifiers-are-not-allowed](multiple-access-type-modifiers-are-not-allowed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()