# strict_types declaration must have 0 or 1 as its value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-have-0-or-1-as-its-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-have-0-or-1-as-its-value.html","name":"strict_types declaration must have 0 or 1 as its value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-28T08:09:58+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"The ``strict_types`` pragma is a switch: ``0`` keeps the usual weak typing (with type coercion for scalar type declarations), and ``1`` turns on strict typing for the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/strict_types-declaration-must-have-0-or-1-as-its-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `strict_types` pragma is a switch: `0` keeps the usual weak typing (with type coercion for scalar type declarations), and `1` turns on strict typing for the current file. No other value makes sense, so PHP only accepts the literal integers `0` and `1`; anything else, including `true`, `false`, or any other number, is rejected.

## Example

```php
<?php

declare(strict_types = 2);

?>
```

## Literal Examples
+ strict_types declaration must have 0 or 1 as its value

## Alternatives
+ Use ``1`` to enable strict typing, or ``0`` to keep weak typing.

## Related error messages
+ [declare(%s)-value-must-be-a-literal](declare\(%s\)-value-must-be-a-literal.html)
+ [strict_types-declaration-must-be-the-very-first-statement-in-the-script](strict\_types-declaration-must-be-the-very-first-statement-in-the-script.html)
+ [strict_types-declaration-must-not](strict\_types-declaration-must-not.html)
+ [strict_types-declaration-must-be](strict\_types-declaration-must-be.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()