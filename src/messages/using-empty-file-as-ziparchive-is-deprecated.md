# Using empty file as ZipArchive is deprecated

## Description
`ZipArchive::open()` accepts an existing, empty (0-byte) file together with the `ZipArchive::CREATE` flag, in order to turn it into a fresh archive. This relied on treating a 0-byte file as an implicit, valid, empty archive.

Since libzip 1.6.0, the library underlying the zip extension no longer considers an empty file a valid archive on its own, and PHP has to work around that internally. As of PHP 8.0.0, doing so is deprecated. This is commonly triggered by patterns using `tempnam()` (which creates an empty placeholder file) before opening it as an archive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-empty-file-as-ziparchive-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-empty-file-as-ziparchive-is-deprecated.html","name":"Using empty file as ZipArchive is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:41 +0000","dateModified":"Tue, 11 Aug 2026 20:56:41 +0000","description":"``ZipArchive::open()`` accepts an existing, empty (0-byte) file together with the ``ZipArchive::CREATE`` flag, in order to turn it into a fresh archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-empty-file-as-ziparchive-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$path = tempnam(sys_get_temp_dir(), 'zip');
// tempnam() leaves an empty (0-byte) file behind.

$zip = new ZipArchive();
$zip->open($path, ZipArchive::CREATE);

?>
```

## Alternatives
+ Delete the empty file before calling ``$zip->open($path, ZipArchive::CREATE)``, so it does not exist yet.
+ Use the ``ZipArchive::OVERWRITE`` flag (optionally combined with ``ZipArchive::CREATE``) instead of relying on an existing empty file.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[ZipArchive::open](ZipArchive::open)