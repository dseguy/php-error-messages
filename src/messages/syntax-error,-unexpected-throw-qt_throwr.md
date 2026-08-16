# syntax error, unexpected 'throw' (T_THROW)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'throw'-(t_throw).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'throw'-(t_throw).html","name":"syntax error, unexpected 'throw' (T_THROW)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``throw`` is not an expression until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'throw'-(t_throw).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`throw` is not an expression until PHP 8.0. Until then, it cannot be used as part of another expression, such as the left part of `or`, an argument, or inside parenthesis. 

After PHP 8.0, one could use it as part of an expression.

## Example

```php
<?php

$x ?? throw new \Exception('Missing value for x');

?>
```

## Alternatives
+ Upgrade to PHP 8.0 or more recent.
+ Convert the ``or`` to an ``ifthen`` structure.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[throwIsAnExpression](throwIsAnExpression)