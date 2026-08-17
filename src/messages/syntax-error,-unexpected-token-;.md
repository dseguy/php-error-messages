# syntax error, unexpected token ";"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;.html","name":"syntax error, unexpected token \";\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"The semi-colon marks the end of a command","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-;.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The semi-colon marks the end of a command. They are needed in blocks, or sequences of commands.

In the first case, the semi-colon signals the end of the `exit` command, and PHP is still parsing the if condition.

In the second case, the semi-colon is understated by the closing PHP tag. The previous attribute `#[A]` requires a structure (class, interface, function...), which is not found.

## Example

```php
<?php

// 'if' needs a second closing ), but PHP keeps parsing it until the semi colon.
if ($d !== foo() {
    exit(1);
}

#[A()] 
// This is an attribute, and it needs a structure to apply to. 

?>
```

## Alternatives
+ Check previous opening and closing parenthesis, they might be unbalanced.
