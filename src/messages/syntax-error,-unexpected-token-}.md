# syntax error, unexpected token "}"

## Description
The closing curly bracket usually mark the end of a block of instructions.

When it is reported as an error, it means that the previous instruction was not closed as expected. For example, when a semi-colon was not forgotten on the previous line.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"}\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"}\".html","name":"syntax error, unexpected token \"}\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The closing curly bracket usually mark the end of a block of instructions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"}\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// print needs a ; at the end of the command
if ($c == 3) { print 'OK'.PHP_EOL }

// The curly brackets are balanced, but not the parenthesis
if (in_array(1, [2, 4]) {}

?>
```

## Alternatives
+ Check if the previous line need a semi-colon ``;``.

## Related error messages
+ [syntax-error,-unexpected-token-"{"](syntax-error,-unexpected-token-{.html)
+ [syntax-error,-unexpected-token-"("](syntax-error,-unexpected-token-\(.html)
+ [syntax-error,-unexpected-token-")"](syntax-error,-unexpected-token-\).html)
+ [syntax-error,-unexpected-token-"]"](syntax-error,-unexpected-token-\].html)
