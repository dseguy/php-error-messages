# Entry %s does not exist and cannot be deleted

## Description
PHP reports failure when trying to remove a file that does not exists in a phar archive. This error message is specific to the `Phar::delete` method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/entry-%s-does-not-exist-and-cannot-be-deleted.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/entry-%s-does-not-exist-and-cannot-be-deleted.html","name":"Entry %s does not exist and cannot be deleted","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP reports failure when trying to remove a file that does not exists in a phar archive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/entry-%s-does-not-exist-and-cannot-be-deleted.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

try {
    $phar = new Phar('/tmp/myphar.phar');
    $phar->addFromString('foo.txt', 'hello');
    unset($phar);

    $phar = new Phar('/tmp/myphar.phar');
    $phar->delete('/oops');
} catch (Exception $e) {
    // handle errors
    print $e->getMessage();
}

?>
```

## Literal Examples
+ Entry oops does not exist and cannot be deleted

## Alternatives
+ Check if the file exists before removing it.

## Related error messages
+ [no-such-file-or-directory](no-such-file-or-directory.html)
+ [unlink-of-"%s"-failed,-file-does-not-exist](unlink-of-%s-failed,-file-does-not-exist.html)
