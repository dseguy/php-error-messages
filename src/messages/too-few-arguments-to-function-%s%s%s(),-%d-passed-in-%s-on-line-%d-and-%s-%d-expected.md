# Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected

## Description
This error is emitted when the number of arguments to call a method or a function is not enough.

Without the required number of arguments at function call, the function cannot execute, as some variables would be missing.

This error covers situations where all the arguments are compulsory.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html","name":"Too few arguments to function %s%s%s(), %d passed in %s on line %d and %s %d expected","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error is emitted when the number of arguments to call a method or a function is not enough","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/too-few-arguments-to-function-%s%s%s(),-%d-passed-in-%s-on-line-%d-and-%s-%d-expected.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [too-few-arguments-to-function-%s%s%s(),-%d-passed-and-%s-%d](asdf)
