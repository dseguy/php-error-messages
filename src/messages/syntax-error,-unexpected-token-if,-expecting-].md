# syntax error, unexpected token "if", expecting "]"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"if\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"if\",-expecting-\"]\".html","name":"syntax error, unexpected token \"if\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T20:02:43+00:00","dateModified":"2026-07-15T20:02:43+00:00","description":"If-then commands are standalone commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"if\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
If-then commands are standalone commands. They can't be part of another expression. Here, PHP found the `if`, while it was expecting another expression. 

Then, PHP mentions that it was expecting `]`: this usually hints at an unclosed array syntax. In the example here, the previous line holds an unclosed array.

## Example

```php
<?php

$a = [1,2, 

if ($a == 2) {
    print OK;
}

?>
```

## Alternatives
+ Look for the previous opening ``[`` square bracket and check that it is all balanced.
+ Look for all previous openings ``[`` square brackets and check that they are all balanced.

## Related error messages
+ [syntax-error,-unexpected-token-"::",-expecting-"]"](syntax-error,-unexpected-token-::,-expecting-\].html)
+ [syntax-error,-unexpected-token-"public",-expecting-"]"](syntax-error,-unexpected-token-public,-expecting-\].html)
