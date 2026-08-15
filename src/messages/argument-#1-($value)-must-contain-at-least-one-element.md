# Argument #1 ($value) must contain at least one element

## Description
max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#1-($value)-must-contain-at-least-one-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#1-($value)-must-contain-at-least-one-element.html","name":"Argument #1 ($value) must contain at least one element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"max() and min() require at least one element in the array: otherwise, the returned value could be confused with NULL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#1-($value)-must-contain-at-least-one-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

max([]);

?>
```

## Alternatives
+ Check if the array has at least one argument before calling max() or min().
+ Add an element to the array before callign max(), and use it as a canary.
