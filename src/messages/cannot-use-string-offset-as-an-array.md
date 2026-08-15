# Cannot use string offset as an array

## Description
It is possible to use the array syntax `$s[$i]` on a string, to access an individual character. And in general, it is also possible to chain the array syntax to access multi-dimensionnal elements `$array[1][2]`. 

Yet, the individual characters of a string are not arrays, so it is not possible to use that syntax with them, while reading it from the string. 

On the other hand, it is possible to assign the character to a variable: PHP considers it then as a normal string.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-string-offset-as-an-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-string-offset-as-an-array.html","name":"Cannot use string offset as an array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is possible to use the array syntax ``$s[$i]`` on a string, to access an individual character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-string-offset-as-an-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$string = '123';

unset($string[0][1]);

?>
```

## Alternatives
+ Remove the 2nd array syntax when working with a string.
+ Assign the character to a variable, and then use it as a string.

## Related error messages
+ [cannot-use-string-offset-as-an-object](asdf)
