# syntax error, unexpected token "continue"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"continue\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"continue\".html","name":"syntax error, unexpected token \"continue\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"``continue`` is a token that stop the current loop or ``switch``, and proceed from the end of that loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"continue\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`continue` is a token that stop the current loop or `switch`, and proceed from the end of that loop. `continue` is standalone expression, and cannot be part of another expression: this is why it is forbidden in the array, or the `match` command.

## Example

```php
<?php
    // break does not fit everwhere
    $a = [1 => continue ];

    // break is for switch, not match
    $b = match($c) {
        1 => continue,
    };

?>
```

## Alternatives
+ Remove the continue, and find another way to jump out of the loop.

## Related error messages
+ ['%s'-not-in-the-'loop'-or-'switch'-context](%s-not-in-the-loop-or-switch-context.html)
