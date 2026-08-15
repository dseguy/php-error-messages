# Unparenthesized `a ? b : c ? d : e` is not supported.

## Description
The nested ternary operator requires a clear definition of priorities, by using parenthesis. 

The code above could be understood as `($a ? $b : $c) ? $d : $e` or `$a ? $b : ($c ? $d : $e)`. Until PHP 8.0, the engine choose the second option; Since then, it must be explicitly written.

Note that, in the error message, the letters represent a full expression. They may be variables, as in the illustration, but any other expression.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unparenthesized-`a-?-b-:-c-?-d-:-e`-is-not-supported..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unparenthesized-`a-?-b-:-c-?-d-:-e`-is-not-supported..html","name":"Unparenthesized `a ? b : c ? d : e` is not supported.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 13:26:42 +0000","dateModified":"Thu, 06 Aug 2026 13:26:42 +0000","description":"The nested ternary operator requires a clear definition of priorities, by using parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unparenthesized-`a-?-b-:-c-?-d-:-e`-is-not-supported..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$x = $a ? $b : $c ? $d : $e;

?>
```

## Alternatives
+ Write the expression as `($a ? $b : $c) ? $d : $e`.
+ Write the expression as `$a ? $b : ($c ? $d : $e)`.
+ Rewrite the expression as an if/then.

## Related error messages
+ [unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported.](unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported..html)
+ [unparenthesized-`a-?:-b-?-c-:-d`-is-not-supported.](unparenthesized-`a-?:-b-?-c-:-d`-is-not-supported..html)
