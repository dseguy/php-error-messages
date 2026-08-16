# needle is not a string or an integer

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/needle-is-not-a-string-or-an-integer.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/needle-is-not-a-string-or-an-integer.html","name":"needle is not a string or an integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The second argument may be a string, or an integer, which will be used as a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/needle-is-not-a-string-or-an-integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The second argument may be a string, or an integer, which will be used as a string. Any other type is forbidden, in particular array. Other types may yield other error messages, such as a type error.

## Example

```php
<?php

print strpos('abc99', []);

?>
```

## Alternatives
+ Use a foreach on an array of strings, and use these values instead.
+ Pick up a value in the array.

## Related error messages
+ [non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr()-call-to-preserve-the-current-behavior](non-string-needles-will-be-interpreted-as-strings-in-the-future.-use-an-explicit-chr\(\)-call-to-preserve-the-current-behavior.html)
