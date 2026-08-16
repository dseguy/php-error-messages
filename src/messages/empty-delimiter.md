# Empty delimiter

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/empty-delimiter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/empty-delimiter.html","name":"Empty delimiter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-15T16:37:04+01:00","dateModified":"2025-07-04T15:29:49+02:00","description":"The explode() function doesn't work without a non-empty delimiter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/empty-delimiter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The explode() function doesn't work without a non-empty delimiter. Use an alternative, such as str_split().

## Example

```php
<?php

print_r(explode('', 'abc')); // Not possible with an empty delimiter

print_r(str_split(1, 'abc')); 

?>
```

## Alternatives
+ Use str_split() to split the string into individual characters.
+ Access to the different elements.

## Related error messages
+ [ConvertingStringtoArrayinPHPUsingDifferentMethods](https://www.simplilearn.com/tutorials/php-tutorial/string-to-array-in-php)
+ [Emptydelimeteron3v4l](https://3v4l.org/MetTo)

In more recent PHP versions, this error message is now :ref:`cannot-be-empty`.