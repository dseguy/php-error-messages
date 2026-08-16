# The (unset) cast is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-deprecated.html","name":"The (unset) cast is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-(unset)-cast-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Removing a variable, a property or an array index with the cast operator (unset) is deprecated since PHP 7.4, and will be removed in PHP 8.0. It is recommnded to do it with the unset() function.

## Example

```php
<?php

(unset) $x;

?>
```

## Alternatives
+ Use the unset() function to remove variables.
+ Assign null to the variable.

In more recent PHP versions, this error message is now :ref:`the-(unset)-cast-is-no-longer-supported`.