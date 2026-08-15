# Write of ``%zu`` bytes failed with errno=%d %s

## Description
The `errno=22` happens when the path is an invalid path. It may hold forbidden characters, such as colon `:` or space `' '`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/write-of-%zu-bytes-failed-with-errno=%d-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/write-of-%zu-bytes-failed-with-errno=%d-%s.html","name":"Write of ``%zu`` bytes failed with errno=%d %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:01:33 +0000","dateModified":"Mon, 13 Jul 2026 09:01:33 +0000","description":"The ``errno=22`` happens when the path is an invalid path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/write-of-%zu-bytes-failed-with-errno=%d-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
