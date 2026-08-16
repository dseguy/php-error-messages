# must be greater than or equal to 1

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-greater-than-or-equal-to-1.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-greater-than-or-equal-to-1.html","name":"must be greater than or equal to 1","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The second argument of ``gmp_import()`` is the number of characters to read in the original string, to build a GMP digit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-greater-than-or-equal-to-1.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The second argument of `gmp_import()` is the number of characters to read in the original string, to build a GMP digit. This size must be 1 or larger, and the string's length must be a multiple of that number.

## Example

```php
<?php
gmp_import('11', -2);
?>
```

## Literal Examples
+ Argument #2 ($word_size) must be greater than or equal to 1

## Alternatives
+ Use the default value of 1, by omitting it.
+ Use a postive number as second argument.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()