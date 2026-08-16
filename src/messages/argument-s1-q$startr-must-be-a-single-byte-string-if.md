# range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#1-($start)-must-be-a-single-byte-string-if.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#1-($start)-must-be-a-single-byte-string-if.html","name":"range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"When range() produces all the values between two boundaries","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#1-($start)-must-be-a-single-byte-string-if.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When range() produces all the values between two boundaries. These two boundaries must be of the same type, for consistency purpose. Hence, when one is a string, the second one also needs to be a string, and range() will generate all the values between these strings.

## Example

```php
<?php

range(1, 'b');

?>
```

## Literal Examples
+ range(): Argument #1 ($start) must be a single byte string if argument #2 ($end) is a single byte string, argument #2 ($end) converted to 0

## Alternatives
+ Cast the integer to a string.
+ Cast the string to an integer.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[rangeSingleByteString](rangeSingleByteString)