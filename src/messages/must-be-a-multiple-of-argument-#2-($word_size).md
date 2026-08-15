# must be a multiple of argument #2 ($word_size)

## Description
The second option of `gmp_import()` configures the number of bytes to take in the string to build the number. Each GMP digit will be read over `$word_size` characters. When the string has a length that is not a multiple of the size of each word, GMP will run short of a few bytes, and emits the error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-multiple-of-argument-#2-($word_size).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-multiple-of-argument-#2-($word_size).html","name":"must be a multiple of argument #2 ($word_size)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The second option of ``gmp_import()`` configures the number of bytes to take in the string to build the number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-multiple-of-argument-#2-($word_size).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
gmp_import('aa', 3);
?>
```

## Literal Examples
+ Argument #1 ($data) must be a multiple of argument #2 ($word_size)

## Alternatives
+ Check that the string length is a multiple of the 2nd argument of ``gmp_import()``.
+ Use a word length that is a factor of the string length.
+ Use a word length of 1, which works all the time, yet may not yield the expected result.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()