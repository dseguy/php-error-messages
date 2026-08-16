# Cannot create Closure for new expression

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-for-new-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-for-new-expression.html","name":"Cannot create Closure for new expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-05-18T17:44:29+02:00","dateModified":"2026-05-18T17:44:29+02:00","description":"When using the ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-create-closure-for-new-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When using the `...` ellpsis operator as an argument, it creates a closure, based on the current function or method. While the syntax can be linted by PHP, it is not possible to use it with a `new` operator.

## Example

```php
<?php

class X {
    function __construct() {}
}

$closure = new X(...);

?>
```

## Alternatives
+ Make a closure that takes the arguments, and relay them to the ``new`` operator.
+ Create a named constructor, and make a closure from this.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()