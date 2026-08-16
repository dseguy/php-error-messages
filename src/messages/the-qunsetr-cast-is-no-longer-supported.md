# The (unset) cast is no longer supported

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-no-longer-supported.html","name":"The (unset) cast is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-29T09:26:03+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8.0. It has to be done with the unset() function.

## Example

```php
<?php

(unset) $x;

?>
```

## Alternatives
+ Use the unset() function to remove variables.
+ Assign null to the variable.

In previous PHP versions, this error message used to be :ref:`the-(unset)-cast-is-deprecated`.