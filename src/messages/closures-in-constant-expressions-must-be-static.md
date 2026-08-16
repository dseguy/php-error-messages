# Closures in constant expressions must be static

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/closures-in-constant-expressions-must-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/closures-in-constant-expressions-must-be-static.html","name":"Closures in constant expressions must be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-07T22:26:09+01:00","dateModified":"2026-07-13T11:03:18+02:00","description":"When defining a closure as a constant value, there cannot be any context value that are imported","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/closures-in-constant-expressions-must-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When defining a closure as a constant value, there cannot be any context value that are imported. This includes the current object `$this` which is included by default in any closure. To avoid this, the `static` option must be added to the closure.

## Example

```php
<?php

class X {
    const MY = function () { return 1;}
}

?>
```

## Alternatives
+ Add the static option to the closure.
+ Define the closure inside a method.

## Related error messages
+ [cannot-use(...)-variables-in-constant-expression](cannot-use\(...\)-variables-in-constant-expression.html)
+ [cannot-use-$this-as-lexical-variable](cannot-use-$this-as-lexical-variable.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()