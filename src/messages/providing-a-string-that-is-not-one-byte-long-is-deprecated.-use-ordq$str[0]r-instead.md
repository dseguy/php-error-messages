# Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ordq$str[0]r-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ordq$str[0]r-instead.html","name":"Providing a string that is not one byte long is deprecated. Use ord($str[0]) instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-05-26T23:19:08+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"The ``ord()`` function returns the ordinal value of the first byte of a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ordq$str[0]r-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `ord()` function returns the ordinal value of the first byte of a string. When the provided string is longer than one byte, only the first byte is used and the remaining bytes are silently discarded. This implicit behavior is a source of confusion, especially when working with multi-byte encodings such as UTF-8, where a single character may span several bytes. To make the intent explicit, use the `$str[0]` syntax to extract the first byte before passing it to `ord()`.

## Example

```php
<?php

    $str = '我';
    
    echo ord($str); 

?>
```

## Alternatives
+ Use the ``$str[0]`` rather than the whole string.
+ Use ``substr($str, 0, 1)`` on the string, as long as the string is not multi-byte.

## Related error messages
+ [providing-an-empty-string-is-deprecated](providing-an-empty-string-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ordNonSingleByteString](ordNonSingleByteString)