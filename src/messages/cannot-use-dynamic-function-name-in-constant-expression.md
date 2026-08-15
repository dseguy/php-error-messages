# Cannot use dynamic function name in constant expression

## Description
This error appears when the name of the function cannot be entirely resolve at compile time. Here, the array cannot be turned into a function or static method name. This also happens for variations on the name, such as using a boolean, an array, or any expression that cannot be resolved at compilation time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-dynamic-function-name-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-dynamic-function-name-in-constant-expression.html","name":"Cannot use dynamic function name in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:22:20 +0000","dateModified":"Fri, 24 Jul 2026 17:22:20 +0000","description":"This error appears when the name of the function cannot be entirely resolve at compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-dynamic-function-name-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

const Closure1 = ([])(...);
const Closure2 = (-1)(...);
const Closure3 = (true)(...);

var_dump(Closure);

?>
```

## Alternatives
+ Use a string for the name of the function or static method.

## Related error messages
+ [illegal-function-name](asdf)
+ [cannot-use-dynamic-method-name-in-constant-expression](asdf)
+ [illegal-method-name](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()