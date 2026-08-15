# declare(%s) value must be a literal

## Description
`declare()` directives (`ticks`, `encoding`, `strict_types`) are processed by the compiler while the file is being parsed, before any code actually runs. At that point, constants, variables, and function calls are not yet available, so only a literal value, such as `1`, `0`, or a quoted string, can be given as the directive's value.

This applies equally to every directive: `ticks`, `encoding`, and `strict_types` all require a literal.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declare(%s)-value-must-be-a-literal.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declare(%s)-value-must-be-a-literal.html","name":"declare(%s) value must be a literal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:18:10 +0000","dateModified":"Mon, 27 Jul 2026 16:18:10 +0000","description":"``declare()`` directives (``ticks``, ``encoding``, ``strict_types``) are processed by the compiler while the file is being parsed, before any code actually runs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declare(%s)-value-must-be-a-literal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

define('TICK_VALUE', 1);

declare(ticks = TICK_VALUE) {
    echo 'Done';
}

?>
```

## Literal Examples
+ declare(ticks) value must be a literal
+ declare(strict_types) value must be a literal
+ declare(encoding) value must be a literal

## Alternatives
+ Replace the constant, variable, or expression with its literal value.

## Related error messages
+ [strict_types-declaration-must-have-0-or-1-as-its-value](strict\_types-declaration-must-have-0-or-1-as-its-value.html)
+ [strict_types-declaration-must-be-the-very-first-statement-in-the-script](strict\_types-declaration-must-be-the-very-first-statement-in-the-script.html)
+ [encoding-declaration-pragma-must-be](encoding-declaration-pragma-must-be.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()