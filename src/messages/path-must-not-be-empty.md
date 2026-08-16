# Path must not be empty

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/path-must-not-be-empty.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/path-must-not-be-empty.html","name":"Path must not be empty","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/path-must-not-be-empty.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
fopen()'s first argument is of type string, though the empty string is not allowed, as it does not lead to any file.

## Example

```php
<?php

fopen('', 'r');

?>
```

## Literal Examples
+ fopen(): Path cannot be empty

## Alternatives
+ Check the name of the file with empty() before using it with fopen().
+ Check the name of the file against '' (empty string) before using it with fopen().

In previous PHP versions, this error message used to be :ref:`path-cannot-be-empty`.