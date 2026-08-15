# is not a valid codepoint

## Description
Some functions uses integers to represents UTF-8 characters, on top of their string representation. When an integer is provided, it has to represent an actual character, in the UTF-8 range. 

In particular, the character cannot be negative, or bigger than 55296.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/is-not-a-valid-codepoint.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/is-not-a-valid-codepoint.html","name":"is not a valid codepoint","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Some functions uses integers to represents UTF-8 characters, on top of their string representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/is-not-a-valid-codepoint.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

mb_substitute_character(-10);

?>
```

## Alternatives
+ Check for the integer value before using it: it must be between 0 and 55296.
+ Use a string representation, with an escape sequence.
