# Too few arguments to function %s%s%s(), %d passed and %s %d

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d.html","name":"Too few arguments to function %s%s%s(), %d passed and %s %d","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-25T11:42:44+01:00","dateModified":"2025-02-10T11:14:07+01:00","description":"This error reports that not enough parameters were used when calling a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that not enough parameters were used when calling a method or a function. A number of the arguments in the method signature are compulsory and at least that many argument must be provided.

Although parameters with default values should be all in the tail of the signature, it is still a valid, yet deprecated, feature. Then, using positional arguments, the code might yield this error as some of the positional arguments might fill some default parameters, leaving unsatisfied parameters later in the list.

While there is an error message when there are missing arguments at call time, there is not error when too many arguments are provided.

## Example

```php
<?php

function foo($a, $b, $c = 2) {}
foo(1);

// deprecated features: $c should be before $b, or get a default value, or $b might have no default value.
function bar($a, $b = 1, $c) {}
bar(1,2);
// Here, $c is not provided, 

?>
```

## Literal Examples
+ Too few arguments to function foo(), 1 passed and exactly 2 expected

## Alternatives
+ Use named parameters to assign arguments to the compulsory arguments.
+ Provide more arguments to the method call.
+ Add default values to the missing parameters in the method signature.

## Related error messages
+ [too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected](too-few-arguments-to-function-%s%s%s\(\),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html)
+ [too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected](too-few-arguments-to-function-%s%s%s\(\),-%d-passed-and-%s-%d-expected.html)
