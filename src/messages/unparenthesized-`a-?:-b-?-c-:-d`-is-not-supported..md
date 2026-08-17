# Unparenthesized `a ?: b ? c : d` is not supported.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unparenthesized-`a-%3F:-b-%3F-c-:-d`-is-not-supported..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unparenthesized-`a-%3F:-b-%3F-c-:-d`-is-not-supported..html","name":"Unparenthesized `a ?: b ? c : d` is not supported.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-06T15:27:15+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Mixing the short ternary operator (``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unparenthesized-`a-%3F:-b-%3F-c-:-d`-is-not-supported..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Mixing the short ternary operator (`?:`) with a full ternary requires a clear definition of priorities, by using parenthesis.

The code above could be understood as `($a ?: $b) ? $c : $d` or `$a ?: ($b ? $c : $d)`. Until PHP 8.0, the engine chose the first option, since the ternary operator was left-associative; since then, it must be explicitly written.

Note that, in the error message, the letters represent a full expression. They may be variables, as in the illustration, but any other expression.

## Example

```php
<?php

$x = $a ?: $b ? $c : $d;

?>
```

## Alternatives
+ Write the expression as `($a ?: $b) ? $c : $d`.
+ Write the expression as `$a ?: ($b ? $c : $d)`.
+ Rewrite the expression as an if/then.

## Related error messages
+ [unparenthesized-`a-?-b-:-c-?-d-:-e`-is-not-supported.](unparenthesized-\`a-?-b-:-c-?-d-:-e\`-is-not-supported..html)
+ [unparenthesized-`a-?-b-:-c-?:-d`-is-not-supported.](unparenthesized-\`a-?-b-:-c-?:-d\`-is-not-supported..html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()