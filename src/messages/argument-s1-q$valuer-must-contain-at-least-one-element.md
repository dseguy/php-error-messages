# Argument #1 ($value) must contain at least one element

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-s1-q$valuer-must-contain-at-least-one-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-s1-q$valuer-must-contain-at-least-one-element.html","name":"Argument #1 ($value) must contain at least one element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-19T14:23:06+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-s1-q$valuer-must-contain-at-least-one-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.

## Example

```php
<?php

max([]);

?>
```

## Alternatives
+ Check if the array has at least one argument before calling max() or min().
+ Add an element to the array before callign max(), and use it as a canary.
