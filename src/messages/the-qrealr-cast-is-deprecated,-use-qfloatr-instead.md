# The (real) cast is deprecated, use (float) instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(real)-cast-is-deprecated,-use-(float)-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(real)-cast-is-deprecated,-use-(float)-instead.html","name":"The (real) cast is deprecated, use (float) instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The ``(real)`` cast operator is deprecated since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(real)-cast-is-deprecated,-use-(float)-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `(real)` cast operator is deprecated since PHP 7.4. It was completely removed in PHP 8.0. `(real)` was a synonym of `(float)`, although there is no such notion in PHP.

## Example

```php
<?php

$float = (real) 1.333;

?>
```

## Alternatives
+ Use ``(float)`` instead.

In more recent PHP versions, this error message is now :ref:`the-(real)-cast-has-been-removed,-use-(float)-instead`.