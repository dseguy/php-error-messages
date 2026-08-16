# %s(): Passing null to parameter #%d (%s) of type string is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-passing-null-to-parameter-#%.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-passing-null-to-parameter-#%.html","name":"%s(): Passing null to parameter #%d (%s) of type string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-31T11:06:43+01:00","dateModified":"2025-11-23T22:22:32+01:00","description":"PHP has been enforcing non-null parameters to PHP native functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-passing-null-to-parameter-#%.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP has been enforcing non-null parameters to PHP native functions. This started in PHP 8.1. Until then, it was possible to use NULL everywhere, and it would have been cast to an empty string or 0. Nowadays, it is a deprecation.

This applies to all PHP native functions, such as, and not limited to: strtolower(), strip_tags(), trim(), addslashes(), strlen(), rtrim(), etc.

## Example

```php
<?php

strlen(null);

?>
```

## Literal Examples
+ strlen(): Passing null to parameter #1 ($string) of type string is deprecated
+ dir(): Passing null to parameter #1 ($path) of type string is deprecated

## Alternatives
+ Check the value before calling the function.
+ Use ``??`` to convert the null into a suitable default value.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[dirWithNull](dirWithNull)