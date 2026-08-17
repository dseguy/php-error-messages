# Unterminated comment starting line %d

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unterminated-comment-starting-line-pd.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unterminated-comment-starting-line-pd.html","name":"Unterminated comment starting line %d","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-07T11:35:32+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The multi-line comments with ``\/* ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unterminated-comment-starting-line-pd.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The multi-line comments with `/* ... */` and `/** ... */` require a closing tag. When that closing tag is missing, the error is emitted.

This problem does not occur with the single line comment `//`, as this comment only ends with the end of the line.

## Example

```php
<?php

/*
comment

    Missing final / below
*        

?>
```

## Literal Examples
+ Unterminated comment starting line 3

## Alternatives
+ Check if the closing tag is complete, with ``*`` and ``/``.
+ Check if the closing tag is not missing entirely.
