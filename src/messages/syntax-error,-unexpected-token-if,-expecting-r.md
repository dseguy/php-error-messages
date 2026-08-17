# syntax error, unexpected token "if", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-if,-expecting-r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-if,-expecting-r.html","name":"syntax error, unexpected token \"if\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"If-then commands are standalone commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-if,-expecting-r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
If-then commands are standalone commands. They can't be part of another expression. Here, PHP found the `if`, while it was expecting another expression. 

Then, PHP mentions that it was expecting `)`: this usually hints at an unclosed method call syntax. In the example here, the previous line holds an unclosed function call to `foo`.

## Example

```php
<?php

$a = foo(1 

if ($a == 2) {
    print OK;
}

?>
```

## Alternatives
+ Look for the previous opening ``(`` parenthesis in functioncalls and check that it is balanced.
+ Look for all previous openings ``(`` parenthesis in functioncalls and check that they are all balanced.
