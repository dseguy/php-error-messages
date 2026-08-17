# Too few arguments to function %s%s%s(), %d passed and %s %d expected

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-pspspsqr,-pd-passed-and-ps-pd-expected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-pspspsqr,-pd-passed-and-ps-pd-expected.html","name":"Too few arguments to function %s%s%s(), %d passed and %s %d expected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-25T11:42:44+01:00","dateModified":"2025-02-10T11:14:07+01:00","description":"This error reports that not enough parameters were used when calling a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-pspspsqr,-pd-passed-and-ps-pd-expected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that not enough parameters were used when calling a method or a function. All the arguments in the method signature are compulsory.

While there is an error message when there are missing arguments at call time, there is not error when too many arguments are provided.

## Example

```php
<?php

function foo($a, $b) {}

foo(1);

?>
```

## Literal Examples
+ Too few arguments to function foo(), 1 passed and exactly 2 expected

## Alternatives
+ Provide more arguments to the method call.
+ Add default values to the missing parameters in the method signature.

## Related error messages
+ [too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d](too-few-arguments-to-function-%s%s%s\(\),-%d-passed-and-%s-%d.html)
