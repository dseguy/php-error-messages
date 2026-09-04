# Unterminated comment starting line %

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unterminated-comment-starting-line-p.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unterminated-comment-starting-line-p.html","name":"Unterminated comment starting line %","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-04T14:36:20+00:00","dateModified":"2026-09-04T14:36:20+00:00","description":"Multi-line comments, written with ``\/* ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unterminated-comment-starting-line-p.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Multi-line comments, written with `/* ... */` or `/** ... */`, require a closing tag. When that closing tag is missing before the end of the file, PHP cannot determine where the comment was meant to stop and raises a compile error.

This problem does not affect single-line comments (`//` or `#`), since those are automatically closed by the end of the line.

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
+ Check that the closing tag is complete, with both ``*`` and ``/``.
+ Check that a closing tag has not been omitted entirely.

## Related error messages
+ [unterminated-comment-starting-line-%d](unterminated-comment-starting-line-%d.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()