# func_get_arg() cannot be called from the global scope

## Description
`func_get_arg()` returns the list of arguments used when calling a function or method. As such, it must be inside a function to be useful.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_get_arg()-cannot-be-called-from-the-global-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_get_arg()-cannot-be-called-from-the-global-scope.html","name":"func_get_arg() cannot be called from the global scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``func_get_arg()`` returns the list of arguments used when calling a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_get_arg()-cannot-be-called-from-the-global-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

func_get_arg(0);

?>
```

## Alternatives
+ Remove func_get_arg() calls from the global space (outside any function).
+ Move the func_get_arg() calls inside a function.

## Related error messages
+ [func_get_args()-cannot-be-called-from-the-global-scope](asdf)
+ [func_num_args()-must-be-called-from-a-function-context](asdf)
