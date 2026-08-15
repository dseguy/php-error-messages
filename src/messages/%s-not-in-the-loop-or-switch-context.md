# '%s' not in the 'loop' or 'switch' context

## Description
`break` and `continue` are used to jump out of a loop, and proceed from the end of that loop. Since PHP 7.0, it is not possible to use them outside such a structure. 

They can't be used in a `match`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-not-in-the-'loop'-or-'switch'-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-not-in-the-'loop'-or-'switch'-context.html","name":"'%s' not in the 'loop' or 'switch' context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"``break`` and ``continue`` are used to jump out of a loop, and proceed from the end of that loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/'%s'-not-in-the-'loop'-or-'switch'-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [syntax-error,-unexpected-token-"break"](asdf)
+ [syntax-error,-unexpected-token-"continue"](asdf)
