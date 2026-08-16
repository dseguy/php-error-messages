# Cannot use result of built-in function in write context

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-result-of-built-in-function-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-result-of-built-in-function-in-write-context.html","name":"Cannot use result of built-in function in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Binding a reference to the return value of a function ($var = &func()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-result-of-built-in-function-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Binding a reference to the return value of a function ($var = &func();) only makes sense if that function itself returns by reference. Built-in, C-implemented functions never do, and unlike a user-defined function, where forgetting the & in the signature merely triggers a notice at run time, the engine can tell this is impossible for an internal function right away, and raises a compile-time error instead.

## Example

```php
<?php

$max = &max(1, 2, 3);

?>
```

## Alternatives
+ Drop the &, and assign the return value normally: $max = max(1, 2, 3);

## Related error messages
+ [can't-use-function-return-value-in-write-context](cant-use-function-return-value-in-write-context.html)
+ [can't-use-method-return-value-in-write-context](cant-use-method-return-value-in-write-context.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()