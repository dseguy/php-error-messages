# Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-pspspsqr,-pd-passed-in-ps-on-line-pd-and-ps-pd-expected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-pspspsqr,-pd-passed-in-ps-on-line-pd-and-ps-pd-expected.html","name":"Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-25T11:42:44+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This error is emitted when the number of arguments to call a method or a function is not enough","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-pspspsqr,-pd-passed-in-ps-on-line-pd-and-ps-pd-expected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when the number of arguments to call a method or a function is not enough.

Without the required number of arguments at function call, the function cannot execute, as some variables would be missing.

This error covers situations where all the arguments are compulsory.

## Example

```php
<?php

function foo($a, $b) {}

foo(1);

?>
```

## Literal Examples
+ Too few arguments to function foo(), 1 passed in file.php on line 5 and exactly 2 expected

## Alternatives
+ Add the missing arguments.
+ Add default values to the missing arguments.

## Related error messages
+ [too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d](too-few-arguments-to-function-%s%s%s\(\),-%d-passed-and-%s-%d.html)
