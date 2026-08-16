# must contain at least one element

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-contain-at-least-one-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-contain-at-least-one-element.html","name":"must contain at least one element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-09T18:17:37+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"min() and max() only work on arrays that contains at least one element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-contain-at-least-one-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
min() and max() only work on arrays that contains at least one element. The object here is to avoid the confusion of the `null` value that may be the result of the operation, and the `null` that PHP used to return when there was nothing to process in the array.

## Example

```php
<?php

echo min([]);
echo max([]);

?>
```

## Alternatives
+ Check for empty() before using the min() or max() functions.
