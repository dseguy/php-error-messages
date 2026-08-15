# Cannot use(...) variables in constant expression

## Description
It is possible to have closures in a constant, since PHP 8.5. Such closure must be static, so that it does not include the current object with `$this`. It also cannot use the `use` clause, as the definition of the closure is outside an execution context: there are no available variables to import in the closure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use(...)-variables-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use(...)-variables-in-constant-expression.html","name":"Cannot use(...) variables in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is possible to have closures in a constant, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use(...)-variables-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    const MY = static function () use ($a) { return 1;};
}

?>
```

## Alternatives
+ Remove the ``use`` clause of the closure.
+ Move the closure inside a method.

## Related error messages
+ [closures-in-constant-expressions-must-be-static](closures-in-constant-expressions-must-be-static.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()