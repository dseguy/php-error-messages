# Filename cannot be empty

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filename-cannot-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filename-cannot-be-empty.html","name":"Filename cannot be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-30T18:48:46+01:00","dateModified":"2025-05-06T07:21:26+02:00","description":"fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/filename-cannot-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file.

This check prevents using an empty string, or its equivalent as `null` or `false`, to access a file. 

This error also applies to `file_get_contents` and `file_put_contents()`. It doesn't apply to `unlink` and `rmdir`.

## Example

```php
<?php

fopen('', 'r');

?>
```

## Alternatives
+ Check the name of the file with empty() before using it with fopen().
+ Check the name of the file against '' (empty string) before using it with fopen().

In more recent PHP versions, this error message is now :ref:`path-cannot-be-empty`.