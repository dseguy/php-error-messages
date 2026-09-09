# Cannot redeclare %s %s (previously declared in %s:%d)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-ps-ps-qpreviously-declared-in-ps:pdr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-ps-ps-qpreviously-declared-in-ps:pdr.html","name":"Cannot redeclare %s %s (previously declared in %s:%d)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:14:33+00:00","dateModified":"2026-09-09T14:14:33+00:00","description":"A class, interface, trait or enum name can only be declared once per request, whether that happens directly in the same file or because two different, user-defined files both declare the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-ps-ps-qpreviously-declared-in-ps:pdr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A class, interface, trait or enum name can only be declared once per request, whether that happens directly in the same file or because two different, user-defined files both declare the same name. This is the general form of the redeclaration error: the first placeholder is the kind of symbol (`class`, `interface`, `trait` or `enum`), the second is its name, and the location points at the file and line of the earlier, conflicting declaration.

Unlike functions, none of these can be conditionally redeclared, even if the two declarations are byte-for-byte identical.

## Example

```php
<?php

interface Foo {
}

interface Foo {
}

?>
```

## Literal Examples
+ Cannot redeclare interface Foo (previously declared in /path/to/file.php:3)
+ Cannot redeclare trait Foo (previously declared in /path/to/file.php:3)
+ Cannot redeclare enum Foo (previously declared in /path/to/file.php:3)

## Alternatives
+ Use include_once or require_once instead of include or require to avoid loading the same file twice.
+ Wrap the declaration in a class_exists()/interface_exists()/trait_exists()/enum_exists() check if it may legitimately be loaded more than once.
+ Rename one of the two symbols, or move them into different namespaces.

## Related error messages
+ [cannot-redeclare-class-%s](cannot-redeclare-class-%s.html)
+ [cannot-redeclare-%s-%s](cannot-redeclare-%s-%s.html)
+ [cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)](cannot-redeclare-function-%s\(\)-\(previously-declared-in-%s:%d\).html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()