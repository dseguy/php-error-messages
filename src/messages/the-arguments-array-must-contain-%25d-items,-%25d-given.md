# The arguments array must contain %d items, %d given

## Description
When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument).
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-arguments-array-must-contain-%d-items,-%d-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-arguments-array-must-contain-%d-items,-%d-given.html","name":"The arguments array must contain %d items, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 10:26:59 +0000","dateModified":"Tue, 26 May 2026 10:26:59 +0000","description":"When using vsprintf(), the second argument is an array which must hold the same number of elements than there are placeholders in the format string (aka, the first argument)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-arguments-array-must-contain-%d-items,-%d-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    var_dump(vsprintf("%04d-%02d-%02d", []));

?>
```

## Literal Examples
+ The arguments array must contain 3 items, 0 given

## Alternatives
+ Add the needed elements to the array.
+ Remove the superfluous placeholders in the format string.
