# %d arguments are required, %d given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%d-arguments-are-required,-%d.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%d-arguments-are-required,-%d.html","name":"%d arguments are required, %d given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every ``%s`` in that argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%d-arguments-are-required,-%d.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The actual number of arguments of the function is commanded by the first argument: there must be an extra argument for every `%s` in that argument. In the illustration code, there are 4 expected arguments, on top of the first one, and only 2 arguments, including the first one.

This error message is related to the PHP native functions `printf()`, `vprintf()`, `sprintf()`, `fprintf()`, `vfprintf()`.

## Example

```php
<?php

// count() has one or two arguments
count($array, $recursive, $tooMany);

// printf()'s number of arguments depends on the first one
printf('%s %s %s %s', $variable);

?>
```

## Literal Examples
+ 4 arguments are required, 2 given

## Alternatives
+ Reduce the number of %s in the first argument.
+ Add the missing argument in the function call.
+ Replace the %s by %%s.

In previous PHP versions, this error message used to be :ref:`too-few-arguments`.