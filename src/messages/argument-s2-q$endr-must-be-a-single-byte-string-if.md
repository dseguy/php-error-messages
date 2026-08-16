# range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#2-($end)-must-be-a-single-byte-string-if.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#2-($end)-must-be-a-single-byte-string-if.html","name":"range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-06-05T07:26:37+02:00","dateModified":"2025-09-18T06:57:58+02:00","description":"When range() produces all the values between two boundaries","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-#2-($end)-must-be-a-single-byte-string-if.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When range() produces all the values between two boundaries. These two boundaries must be of the same type, for consistency purpose. Hence, when one is a one character string, the second one also needs to be a one character string, and range() generates all the values between these strings.

## Example

```php
<?php

range('c', 3);

?>
```

## Literal Examples
+ range(): Argument #2 ($end) must be a single byte string if argument #1 ($start) is a single byte string, argument #1 ($start) converted to 0

## Alternatives
+ Use another string as second argument.
+ Call range with two integers, and use chr() on each element of the array to turn them into characters.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[rangeSingleByteString](rangeSingleByteString)