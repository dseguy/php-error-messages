# `%s' is not a valid mode for fopen

## Description
There are several modes when opening a file, as passed with the 2nd argument. Yet, there are values and combinaisons of values thare are not possible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s'-is-not-a-valid-mode-for-fopen.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s'-is-not-a-valid-mode-for-fopen.html","name":"`%s' is not a valid mode for fopen","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"There are several modes when opening a file, as passed with the 2nd argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s'-is-not-a-valid-mode-for-fopen.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$fp = fopen($path, "+rw");

?>
```

## Literal Examples
+ '+rw' is not a valid mode for fopen

## Alternatives
+ Use a valid open mode.

## Related error messages
+ [fopen](https://www.php.net/manual/en/function.fopen.php)
