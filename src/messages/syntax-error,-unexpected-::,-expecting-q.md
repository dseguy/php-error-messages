# syntax error, unexpected '::', expecting '('

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'::',-expecting-'('.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'::',-expecting-'('.html","name":"syntax error, unexpected '::', expecting '('","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This is a situation where a new keyword degrades a previously valid syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'::',-expecting-'('.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is a situation where a new keyword degrades a previously valid syntax. `match` is a new keyword in PHP 8.0, for the eponymous command. It cannot be used as a class name, a function name, or a global constant, as before. 

By extension, the `match` keyword cannot be used in static object notations, such as calling a constant, or a static method or property.

This error may arise with other keywords, for similar reasons.

## Example

```php
<?php

echo Match::A;

?>
```

## Alternatives
+ Rename the ``match`` class to a non-keyword name.

## Related error messages
+ [syntax-error,-unexpected-token-"::"](syntax-error,-unexpected-token-::.html)
