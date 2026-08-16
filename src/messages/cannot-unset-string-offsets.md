# Cannot unset string offsets

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-string-offsets.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-string-offsets.html","name":"Cannot unset string offsets","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unset-string-offsets.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
While strings and arrays share the same syntax with square brackets, to access individual elements, that syntax is not available with the unset() function. Strings do not behave like an array, so it is not possible to remove one char with unset.

## Example

```php
<?php

$a = 'abc';
unset($a);

?>
```

## Alternatives
+ Explode() the string into an array, use the unset() on the array, and then, implode() it back into a string.
+ Use substr() twice, to cut out the unwanted character.
+ Use preg_replace(), to replace the character with an empty string.
+ Use strtr(), to replace the character with an empty string, if it is unique.
