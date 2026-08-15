# Cannot redeclare class %s

## Description
A class name can only be declared once per request. This error appears when the same class name is declared twice, either directly in the same file, or because a file defining the class was included more than once (for instance with `include` instead of `include_once`), or because two different files both declare a class with the same name.

Unlike functions, PHP does not allow a class to be conditionally redeclared, even if the two declarations are identical.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-class-%s.html","name":"Cannot redeclare class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:01:32 +0000","dateModified":"Sun, 26 Jul 2026 06:01:32 +0000","description":"A class name can only be declared once per request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-redeclare-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X
{
}

class X
{
}

?>
```

## Literal Examples
+ Cannot redeclare class X

## Alternatives
+ Use ``include_once`` or ``require_once`` instead of ``include`` or ``require`` to avoid loading the same file twice.
+ Wrap the class declaration in a ``class_exists()`` check if it may legitimately be loaded more than once.
+ Rename one of the two classes, or move them into different namespaces.

## Related error messages
+ [cannot-redeclare-%s::%s()](asdf)
+ [cannot-redeclare-function-%s()-(previously-declared-in-%s:%d)](asdf)
+ [class-declarations-may-not-be-nested](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()