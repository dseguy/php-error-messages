# open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s)

## Description
This is an alt error message raised when a PHP extension tries to access a file, while the `open_basedir` is enabled. This may happen with XML extensions, `sqlite3`, `file`, `tidy`, `mysqli`, `readline`, `stream`, `curl`, etc. This list is not exhaustive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s).html","name":"open_basedir restriction in effect. File(%s) is not within the allowed path(s): (%s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This is an alt error message raised when a PHP extension tries to access a file, while the ``open_basedir`` is enabled","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/open_basedir-restriction-in-effect.-file(%s)-is-not-within-the-allowed-path(s):-(%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    $db = new SQLite3('/forbidden/path/to/sqlite3.db');

?>
```

## Literal Examples
+ open_basedir restriction in effect. File(example.php) is not within the allowed path(s): (.::/tmp/)

## Alternatives
+ Make sure the file path lies within the ``open_basedir`` directive's path.
+ Change the value of the ``open_basedir`` directive.
+ Check the value of the ``open_basedir`` directive for typos.

## Related error messages
+ [open_basedir-prohibits-opening-%s](open\_basedir-prohibits-opening-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()