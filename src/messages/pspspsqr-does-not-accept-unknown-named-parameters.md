# %s%s%s() does not accept unknown named parameters

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s()-does-not-accept-unknown-named-parameters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s()-does-not-accept-unknown-named-parameters.html","name":"%s%s%s() does not accept unknown named parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-09-26T09:24:47+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s%s%s()-does-not-accept-unknown-named-parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
printf() and sprintf() take a format string as first argument, and an arbitrary number of arguments after that. Those extra arguments are only positional. Hence, it is not possible to use ellipsis on an array with string keys. 

This error also applies to array functions that handles the parameters as a list: in a list, the names are not important.

## Example

```php
<?php

printf('%s', ...['a' => 2]);

array_merge([1, 2], a: [3, 4]);

array_intersect([1, 2], a: [3, 4]);

array_diff_key([1, 2], [3, 4], a: [5, 6]);

?>
```

## Literal Examples
+ printf() does not accept unknown named parameters
+ array_merge() does not accept unknown named parameters
+ array_diff_key() does not accept unknown named parameters
+ array_intersect() does not accept unknown named parameters

## Alternatives
+ Use array_values() on the array, before the ellipsis.
