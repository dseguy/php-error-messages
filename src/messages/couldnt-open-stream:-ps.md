# Couldn't open stream: %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/couldnt-open-stream:-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/couldnt-open-stream:-ps.html","name":"Couldn't open stream: %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-31T11:06:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"When opening a stream, or file, a mode of operation is needed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/couldnt-open-stream:-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

//`wr' is not a valid mode for fopen 
// write-only w and read-only r are mutually exclusive
fopen($path, 'wr');


?>
```

## Literal Examples
+ Couldn't open stream: '+k' is not a valid mode for fopen
+ Couldn't open stream: Is a directory
+ Couldn't open stream: Inappropriate ioctl for device
+ Couldn't open stream: Invalid argument

## Alternatives
+ Use only valid stream open modes.

## Related error messages
+ [fopen](https://www.php.net/manual/en/function.fopen.php)

In previous PHP versions, this error message used to be :ref:`couldn't-open-stream-%s`.