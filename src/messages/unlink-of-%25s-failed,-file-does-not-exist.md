# unlink of "%s" failed, file does not exist

## Description
PHP reports failure when trying to remove a file that does not exists in a phar archive. This error message does not appear when using the regular filesystem, or the `delete` method on a `phar` object.

This error message is part of the stream system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unlink-of-\"%s\"-failed,-file-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unlink-of-\"%s\"-failed,-file-does-not-exist.html","name":"unlink of \"%s\" failed, file does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"PHP reports failure when trying to remove a file that does not exists in a phar archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unlink-of-\"%s\"-failed,-file-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

try {
    $phar = new Phar('/tmp/myphar.phar');
    $phar->addFromString('foo.txt', 'hello');
    unset($phar);

    $phar = new Phar('/tmp/myphar.phar');
    unlink('phar:///tmp/myphar.phar/oops');
} catch (Exception $e) {
    // handle errors
    print $e->getMessage();
}
?>
```

## Literal Examples
+ unlink of "oops" failed, file does not exist

## Alternatives
+ Check if the file is available before removing it, with ``Phar::offsetExists``.

## Related error messages
+ [entry-%s-does-not-exist-and-cannot-be-deleted](entry-%s-does-not-exist-and-cannot-be-deleted.html)
+ [no-such-file-or-directory](no-such-file-or-directory.html)
