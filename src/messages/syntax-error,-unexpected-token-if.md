# syntax error, unexpected token "if"

## Description
If-then expressions are standalone expressions, and cannot be used inside another expression. Hence, they must be preceded by a semi-colon, or any other expression closing character.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"if\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"if\".html","name":"syntax error, unexpected token \"if\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"If-then expressions are standalone expressions, and cannot be used inside another expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"if\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = foo() && if ($a == 2) { echo $a; } else { echo "No A"; }

match( 
if ($a == 2) { echo $a; } else { echo "No A"; }

?>
```

## Alternatives
+ Replace the ``&&`` by a semi-colon.
+ Move the ``$a = foo() &&`` inside the if condition, before the ``$a == 2``.
+ Check for opening parenthesis, and make sure they are closed.
+ Check for previous statements that uses parenthesis, such as match, switch, if... and make sure they are closed.
