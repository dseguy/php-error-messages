# '%s' not in the 'loop' or 'switch' context

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-not-in-the-loop-or-switch-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-not-in-the-loop-or-switch-context.html","name":"'%s' not in the 'loop' or 'switch' context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-09T10:51:55+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"``break`` and ``continue`` are used to jump out of a loop, and proceed from the end of that loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-not-in-the-loop-or-switch-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`break` and `continue` are used to jump out of a loop, and proceed from the end of that loop. Since PHP 7.0, it is not possible to use them outside such a structure. 

They can't be used in a `match`.

## Example

```php
<?php

continue;

break;

?>
```

## Literal Examples
+ 'break' not in the 'loop' or 'switch' context
+ 'continue' not in the 'loop' or 'switch' context

## Alternatives
+ Remove the ``break``.
+ Remove the ``continue``.
+ Move the ``break`` inside a ``switch`` block.
+ Move the ``continue`` inside a loop  block: ``for``, ``foreach``, ``while``, ``do..while``.

## Related error messages
+ [syntax-error,-unexpected-token-"break"](syntax-error,-unexpected-token-break.html)
+ [syntax-error,-unexpected-token-"continue"](syntax-error,-unexpected-token-continue.html)
