# Couldn't open stream %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/couldn't-open-stream-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/couldn't-open-stream-%s.html","name":"Couldn't open stream %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"When opening a stream, or file, a mode of operation is needed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/couldn't-open-stream-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When opening a stream, or file, a mode of operation is needed. 

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.

All other strings are not supported, and yield this error.

## Example

```php
<?php

//`+k' is not a valid mode for fopen 
// k is not an open option
fopen($path, '+k');

//`+wr' is not a valid mode for fopen 
// write-only w, read-only r and + are mutually exclusive
// w+, r+ and rw are all valid
fopen($path, '+wr');


?>
```

## Alternatives
+ Use only valid stream open modes.

## Related error messages
+ [fopen](https://www.php.net/manual/en/function.fopen.php)

In more recent PHP versions, this error message is now :ref:`couldn't-open-stream:-%s`.