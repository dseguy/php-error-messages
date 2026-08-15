# Providing an empty string is deprecated

## Description
Calling `ord()` with an empty string is like calling it without an argument: it has nothing to work on.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-empty-string-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-empty-string-is-deprecated.html","name":"Providing an empty string is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 26 May 2026 10:26:35 +0000","dateModified":"Tue, 26 May 2026 10:26:35 +0000","description":"Calling ``ord()`` with an empty string is like calling it without an argument: it has nothing to work on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-an-empty-string-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    ord('');

?>
```

## Alternatives
+ Remove the call ord() on empty string.
+ Check that the length of the string passed to ord() is 1.
+ Ensure that the string is in latin1 encoding: multi-byte strings will also lead to an error.

## Related error messages
+ [providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord($str[0])-instead](providing-a-string-that-is-not-one-byte-long-is-deprecated.-use-ord\($str\[0\]\)-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[emptyStringWithOrd](emptyStringWithOrd)