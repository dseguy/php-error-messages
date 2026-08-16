# Too few arguments

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments.html","name":"Too few arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-16T12:25:09+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Functions such as ``printf()`` require at least one argument, the format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Functions such as `printf()` require at least one argument, the format. In that argument, the function will identify and require more arguments, passed after this first one. When there is not enough arguments for the first one, this error appears.

Not that extra arguments are ignored silently by PHP.

This applies to `printf()`, `sprintf()`, `fprintf()`.

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