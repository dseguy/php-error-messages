# syntax error, unexpected ';', expecting '{'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-';',-expecting-'{'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-';',-expecting-'{'.html","name":"syntax error, unexpected ';', expecting '{'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-01-04T22:42:21+01:00","dateModified":"2026-02-19T19:18:45-05:00","description":"The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-';',-expecting-'{'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The error message comes from the possibility to use new lines inside fully qualified names, that was possible until PHP 8.0.

## Example

```php
<?php

    \A 
                           \B 
                           \C
                           ;

?>
```

## Alternatives
+ Remove the new lines and whitespaces inside a fully qualified name.
