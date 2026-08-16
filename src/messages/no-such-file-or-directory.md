# No such file or directory

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-such-file-or-directory.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-such-file-or-directory.html","name":"No such file or directory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP reports, as warning, a failure to remove a file that doesn't exists","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/no-such-file-or-directory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP reports, as warning, a failure to remove a file that doesn't exists. This is both an error, as the file could not be removed, but also a success, as the file is removed in the end.

## Example

```php
<?php

unlink(non-existing-file.txt);

?>
```

## Literal Examples
+ unlink(oops): No such file or directory

## Alternatives
+ Check that the file exists before trying to remove it.

## Related error messages
+ [unlink-of-"%s"-failed,-file-does-not-exist](unlink-of-%s-failed,-file-does-not-exist.html)
+ [entry-%s-does-not-exist-and-cannot-be-deleted](entry-%s-does-not-exist-and-cannot-be-deleted.html)
