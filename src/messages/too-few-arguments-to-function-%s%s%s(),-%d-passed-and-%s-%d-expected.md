# Too few arguments to function %s%s%s(), %d passed and %s %d expected

## Description
This error reports that not enough parameters were used when calling a method or a function. All the arguments in the method signature are compulsory.

While there is an error message when there are missing arguments at call time, there is not error when too many arguments are provided.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected.html","name":"Too few arguments to function %s%s%s(), %d passed and %s %d expected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error reports that not enough parameters were used when calling a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d-expected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d](asdf)
