# The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.

## Description
The `(real)` cast operator was deprecated in PHP 7.x and is completely removed since PHP 8.0. It may be replaced with `(float)`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(real)-cast-has-been-removed,-use-(float)-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(real)-cast-has-been-removed,-use-(float)-instead.html","name":"The (real) cast operator has been removed, use (float) instead. Both operator looked like synonyms, and were providing the same feature.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The ``(real)`` cast operator was deprecated in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(real)-cast-has-been-removed,-use-(float)-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$float = (real) "1.333";

?>
```

## Alternatives
+ Use ``(float)`` instead.

In previous PHP versions, this error message used to be :ref:`the-(real)-cast-is-deprecated,-use-(float)-instead`.