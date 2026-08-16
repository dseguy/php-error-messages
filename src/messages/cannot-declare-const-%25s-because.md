# Cannot declare const %s because

## Description
This error is the constant counterpart of the `use` collision error raised for classes and functions: it fires when a top-level `const` declaration reuses a name that was already brought into the current file through a `use const ... as ...` import.

The full message reads: `Cannot declare const %s because the name is already in use`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-const-%s-because.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-const-%s-because.html","name":"Cannot declare const %s because","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 26 Jul 2026 06:31:08 +0000","dateModified":"Sun, 26 Jul 2026 06:31:08 +0000","description":"This error is the constant counterpart of the ``use`` collision error raised for classes and functions: it fires when a top-level ``const`` declaration reuses a name that was already brought into the current file through a ``use const ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-declare-const-%s-because.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

use const App\FOO as BAR;

const BAR = 42;

?>
```

## Literal Examples
+ Cannot declare const BAR because the name is already in use

## Alternatives
+ Rename the ``const`` declaration.
+ Change the alias used in the ``use const`` import.

## Related error messages
+ [cannot-use%s-%s-as-%s-because-the-name-is-already-in-use](cannot-use%s-%s-as-%s-because-the-name-is-already-in-use.html)
+ [cannot-redeclare-constant-'%s'](cannot-redeclare-constant-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()