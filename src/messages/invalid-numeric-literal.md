# Invalid numeric literal

## Description
This error reports an invalid number, hardcoded in the source code.

Numbers are written with digits, without delimiters such as simple or double quotes. Then, they are converted in PHP's internal representation of a number, and this is where error may arise.

In particular, integers have an upper and lower limit, `PHP_INT_MAX` and `PHP_INT_MIN`. Although, in that case, they are turned into a float, with loss of precision but no warning.

Then, PHP supports binary, octal and hexadecimal format. In the case above, the `o` signals an octal number, written with digits from 0 to 7. 8 is not allowed, and is not parsed by PHP.

This is also the case for illegal characters in binary (anything other than `1` and `0`), or hexadecimal (anything other than digits, and letters from  `a` and `f`).

An old convention was to consider octal any number that starts with a leading 0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-numeric-literal.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-numeric-literal.html","name":"Invalid numeric literal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error reports an invalid number, hardcoded in the source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/invalid-numeric-literal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php 

echo 0o78;

echo 078;

?>
```

## Alternatives
+ Fix the number and use valid digits.
+ Drop the initial 0 to make the number decimal, not octal.
+ Add quotes to make this number a string, not a parsed number.
