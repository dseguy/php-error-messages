# func_get_args() cannot be called from the global scope

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_get_args()-cannot-be-called-from-the-global-scope.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_get_args()-cannot-be-called-from-the-global-scope.html","name":"func_get_args() cannot be called from the global scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-11T22:47:07+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"``func_get_args()`` returns the list of arguments used when calling a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_get_args()-cannot-be-called-from-the-global-scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`func_get_args()` returns the list of arguments used when calling a function or method. As such, it must be inside a function to be useful.

## Example

```php
<?php

func_get_args();

?>
```

## Alternatives
+ Remove func_get_args() calls from the global space (outside any function).
+ Move the func_get_args() calls inside a function.

## Related error messages
+ [func_get_arg()-cannot-be-called-from-the-global-scope](func\_get\_arg\(\)-cannot-be-called-from-the-global-scope.html)
+ [func_num_args()-must-be-called-from-a-function-context](func\_num\_args\(\)-must-be-called-from-a-function-context.html)
