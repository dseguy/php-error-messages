# The (unset) cast is no longer supported

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-no-longer-supported.html","name":"The (unset) cast is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Removing a variable, a property or an array index with the cast operator (unset) was removed in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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