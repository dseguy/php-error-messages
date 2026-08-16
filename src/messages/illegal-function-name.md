# Illegal function name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-function-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-function-name.html","name":"Illegal function name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:21:43 +0000","dateModified":"Fri, 24 Jul 2026 17:21:43 +0000","description":"This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/illegal-function-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error messages appears when there is an attempt to create a closure from a function, whose name is not a valid function. Numbers, such as float and integers, are not valid function name, and yield this error. Negative numbers, and other types yield a distinct error.

## Example

```php
<?php

const Closure = (0)(...);

var_dump(Closure);

?>
```

## Alternatives
+ Use a string, instead of a number. Check that the string is a valid name for a function or a static method.
+ Ensures that the name is a static expression, and that each element may be resolved at compile time.

## Related error messages
+ [cannot-use-dynamic-function-name-in-constant-expression](cannot-use-dynamic-function-name-in-constant-expression.html)
+ [illegal-method-name](illegal-method-name.html)
+ [cannot-use-dynamic-method-name-in-constant-expression](cannot-use-dynamic-method-name-in-constant-expression.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()