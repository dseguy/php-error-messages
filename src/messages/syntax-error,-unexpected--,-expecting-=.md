# syntax error, unexpected '-', expecting '='

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'-',-expecting-'='.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'-',-expecting-'='.html","name":"syntax error, unexpected '-', expecting '='","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-25T12:17:28+01:00","dateModified":"2025-02-16T07:23:20-05:00","description":"When defining a constant, the constant name must be valid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'-',-expecting-'='.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When defining a constant, the constant name must be valid. It must be satisfying the following regex: `/[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/`. When an unexpected character appears, it yields this errors, mentioning the erroneous character first.

This error appears for global constant, written with `const` or for class constants, inside a class.

The unexpected character may have a lot of variations, in particular any non-letter or non-figure characters. Check the regex for more options.

## Example

```php
<?php

const A-B = 1;

?>
```

## Alternatives
+ Remove the ``-`` in the constant name.
+ Remove the ``unexpected`` character in the constant name.
+ Remove the constant definition.
