# syntax error, unexpected token ",", expecting "]"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\",-expecting-\"]\".html","name":"syntax error, unexpected token \",\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"A comma was found in an array syntax: the syntax is ``$variable[$index]``, and there can be only one index between the brackets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A comma was found in an array syntax: the syntax is `$variable[$index]`, and there can be only one index between the brackets.

## Example

```php
<?php

echo $a[1,2];

?>
```

## Alternatives
+ Remove the comma and the code after it, until the closing bracket.
+ Close the square bracket, open a new one and remove the comma: ``$a[1][2]``.

## Related error messages
+ [syntax-error,-unexpected-token-","](syntax-error,-unexpected-token-,.html)
+ [syntax-error,-unexpected-token-",",-expecting-variable-or-"$"](syntax-error,-unexpected-token-,,-expecting-variable-or-$.html)
+ [syntax-error,-unexpected-token-",",-expecting-variable](syntax-error,-unexpected-token-,,-expecting-variable.html)
