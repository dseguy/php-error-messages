# Cannot use string offset as an object

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-string-offset-as-an-object.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-string-offset-as-an-object.html","name":"Cannot use string offset as an object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-string-offset-as-an-object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to use the array syntax `$s[$i]` on a string, to access an individual character. And in general, it is also possible to chain the array syntax to access properties `$array[1]->p`. 

Yet, the individual characters of a string are never objects, so it is not possible to use that syntax with them, while reading it from the string.

## Example

```php
<?php

$string = '123';

unset($string[0]->a);

?>
```

## Alternatives
+ Remove the 2nd array syntax when working with a string.

## Related error messages
+ [cannot-use-string-offset-as-an-array](cannot-use-string-offset-as-an-array.html)
