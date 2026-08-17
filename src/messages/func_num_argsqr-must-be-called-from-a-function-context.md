# func_num_args() must be called from a function context

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_num_argsqr-must-be-called-from-a-function-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_num_argsqr-must-be-called-from-a-function-context.html","name":"func_num_args() must be called from a function context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-11T22:47:07+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"``func_num_arg()`` returns the number of arguments used when calling a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/func_num_argsqr-must-be-called-from-a-function-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`func_num_arg()` returns the number of arguments used when calling a function or method. As such, it must be inside a function to be useful.

## Example

```php
<?php

func_num_args();

?>
```

## Alternatives
+ Remove func_num_args() calls from the global space (outside any function).
+ Move the func_num_args() calls inside a function.

## Related error messages
+ [func_get_args()-cannot-be-called-from-the-global-scope](func\_get\_args\(\)-cannot-be-called-from-the-global-scope.html)
+ [func_get_arg()-cannot-be-called-from-the-global-scope](func\_get\_arg\(\)-cannot-be-called-from-the-global-scope.html)
