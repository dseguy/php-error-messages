# Too few arguments

## Description
Functions such as `printf()` require at least one argument, the format. In that argument, the function will identify and require more arguments, passed after this first one. When there is not enough arguments for the first one, this error appears.

Not that extra arguments are ignored silently by PHP.

This applies to `printf()`, `sprintf()`, `fprintf()`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments.html","name":"Too few arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Functions such as ``printf()`` require at least one argument, the format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

printf('%s %s', 1);

?>
```

## Literal Examples
+ printf(): Too few arguments

## Alternatives
+ Check that the format (first argument), has only the required placeholders ``%s``, ``%i``...
+ Check that the ``printf()`` has enough arguments to match the format.

In more recent PHP versions, this error message is now :ref:`%d-arguments-are-required,-%d`.