# strict_types declaration must not

## Description
`declare()` supports a block form for most directives, such as `declare(ticks = 1) { ... }`, which scopes the setting to the code inside the block. `strict_types` is different: it is a compile-time, whole-file setting, not something that can be toggled for a portion of the script. Because of that, the block form is rejected outright.

The full message reads: `strict_types declaration must not use block mode`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-not.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-not.html","name":"strict_types declaration must not","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:15:16 +0000","dateModified":"Tue, 04 Aug 2026 19:15:16 +0000","description":"``declare()`` supports a block form for most directives, such as ``declare(ticks = 1) { ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-not.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

declare(strict_types = 1) {
    var_dump(strlen('abc'));
}

?>
```

## Literal Examples
+ strict_types declaration must not use block mode

## Alternatives
+ Remove the curly braces, and use ``declare(strict_types = 1);`` as a simple statement.

## Related error messages
+ [strict_types-declaration-must-be-the-very-first-statement-in-the-script](asdf)
+ [strict_types-declaration-must-have-0-or-1-as-its-value](asdf)
+ [strict_types-declaration-must-be](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()