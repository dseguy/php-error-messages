# Cannot redeclare %s %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-ps-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-ps-ps.html","name":"Cannot redeclare %s %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T18:11:49+02:00","dateModified":"2026-09-09T18:11:49+02:00","description":"This is the general form of the class\/interface\/trait\/enum redeclaration error, used specifically when the conflicting name is already taken by an internal symbol, one built into PHP itself or provided by a loaded extension, rather than by another user-defined file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-ps-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the general form of the class/interface/trait/enum redeclaration error, used specifically when the conflicting name is already taken by an internal symbol, one built into PHP itself or provided by a loaded extension, rather than by another user-defined file. Because internal classes and interfaces have no PHP source file or line number of their own, the message omits the `(previously declared in ...)` location that appears when the conflict is with another user-defined file.

The first placeholder is the kind of symbol (`class`, `interface`, `trait` or `enum`), the second is its name.

## Example

```php
<?php

interface Stringable {
}

?>
```

## Literal Examples
+ Cannot redeclare interface Stringable
+ Cannot redeclare class stdClass

## Alternatives
+ Rename the declaration to avoid colliding with a built-in or extension-provided name.
+ Wrap the declaration in a class_exists()/interface_exists()/trait_exists()/enum_exists() check, though this rarely helps for internal symbols since they are always present.

## Related error messages
+ [cannot-redeclare-class-%s](cannot-redeclare-class-%s.html)
+ [cannot-redeclare-%s-%s-(previously-declared-in-%s:%d)](cannot-redeclare-%s-%s-\(previously-declared-in-%s:%d\).html)

In more recent PHP versions, this error message is now :ref:`cannot-redeclare-%s-%s-(previously-declared-in-%s:%d)`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()