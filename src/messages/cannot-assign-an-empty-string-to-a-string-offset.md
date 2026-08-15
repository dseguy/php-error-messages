# Cannot assign an empty string to a string offset

## Description
It is possible to access an individual character inside a string, and replace it with another character. 

On the other hand, it is not possible to remove that character by using an empty string. The only allowed modification is a replacement: one character replace another character. 

In fact, PHP will only use the first character, when trying to modify an offset with a string longer than one character.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-an-empty-string-to-a-string-offset.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-an-empty-string-to-a-string-offset.html","name":"Cannot assign an empty string to a string offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is possible to access an individual character inside a string, and replace it with another character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-an-empty-string-to-a-string-offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$string = 'ab d';
$string[2] = 'c';  // add c in the right place

$string[2] = '';  // error

$string[2] = 'Cdef';  // only sets the c

?>
```

## Alternatives
+ Use substr() to cut the string before and after, then concatenate them.
+ Replace the character with a space.
