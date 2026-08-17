# Write of ``%zu`` bytes failed with errno=%d %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/write-of-pzu-bytes-failed-with-errno=pd-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/write-of-pzu-bytes-failed-with-errno=pd-ps.html","name":"Write of ``%zu`` bytes failed with errno=%d %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-06-21T09:54:52+02:00","dateModified":"2026-07-13T11:03:18+02:00","description":"The ``errno=22`` happens when the path is an invalid path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/write-of-pzu-bytes-failed-with-errno=pd-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `errno=22` happens when the path is an invalid path. It may hold forbidden characters, such as colon `:` or space `' '`.

## Example

```php
<?php

file_put_contents($path, $content);

?>
```

## Literal Examples
+ Write of 200 bytes failed with ``errno=22``

## Alternatives
+ Check the path of the file.
