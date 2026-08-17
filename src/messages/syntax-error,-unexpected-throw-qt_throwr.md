# syntax error, unexpected 'throw' (T_THROW)

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-throw-qt_throwr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-throw-qt_throwr.html","name":"syntax error, unexpected 'throw' (T_THROW)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-24T18:28:14+01:00","dateModified":"2025-10-19T10:21:17+02:00","description":"``throw`` is not an expression until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-throw-qt_throwr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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