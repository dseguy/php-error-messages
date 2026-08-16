# syntax error, unexpected token "<<"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"<<\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"<<\".html","name":"syntax error, unexpected token \"<<\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"This error might be related to the left bitshift operator, although it is often related to a git diff leftover","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"<<\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error might be related to the left bitshift operator, although it is often related to a git diff leftover. Here, a merge conflict was left in the code, and the first and erroneous characters are `<<`.

There are other possibilities of error with that operator, although they are less common.

## Example

```php
<?php

<<<<<<< HEAD
    $a = 2 * $b;
=======
    $a = 3 * $b + 1;
>>>>>>> e0ce25cd1fe156c2f50def834532e489b923dcef

?>
```

## Alternatives
+ Remove the diff from the code, as it doesn't compile.
+ Fix the merge conflict.
