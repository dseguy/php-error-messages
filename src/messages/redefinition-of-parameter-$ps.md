# Redefinition of parameter $%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/redefinition-of-parameter-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/redefinition-of-parameter-$%s.html","name":"Redefinition of parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-16T12:47:22-05:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Parameters must all have distinct names in a method signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/redefinition-of-parameter-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Parameters must all have distinct names in a method signature. Before PHP 7.0, no error was emitted, and the last parameter's value was used. In PHP 7.0 and more recent, it is a compilation error.

## Example

```php
<?php

function foo($b, $b, $b) {}

?>
```

## Literal Examples
+ Redefinition of parameter $b

## Alternatives
+ Use all different names for the parameters.
