# syntax error, unexpected token "?", expecting identifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-%3F,-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-%3F,-expecting-identifier.html","name":"syntax error, unexpected token \"?\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:48:03+00:00","dateModified":"2026-09-18T15:48:03+00:00","description":"This error happens when trying to add a type to a global constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-%3F,-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error happens when trying to add a type to a global constant. Only class constants can be typed, since PHP 8.3; a top-level `const` declaration never supports a type, so the parser expects the constant's identifier right after the `const` keyword and rejects the `?` (or any other type token) that appears instead.

## Example

```php
<?php

const ?int GLOBAL_TYPED = true;

?>
```

## Alternatives
+ Make the constant a class constant, which can be typed since PHP 8.3.
+ Remove the type from the constant definition.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()