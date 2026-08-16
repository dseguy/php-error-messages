# cannot be 0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-0.html","name":"cannot be 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-08-30T23:05:19+02:00","dateModified":"2025-09-02T07:12:17+02:00","description":"The third argument of range() is the step: the amount to progress for each element, compared to the previous one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-be-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The third argument of range() is the step: the amount to progress for each element, compared to the previous one. When that step is null, the range() function always creates the same element, with no chance to finish. This cannot be 0.

## Example

```php
<?php

$interval = range(10, 20, 0);

?>
```

## Alternatives
+ Use a value strictly non-zero.
