# Instantiation of class Closure is not allowed

## Description
The `Closure` class is a PHP native class, which cannot be directly instantiated. It must be created with other syntaxes, such as the closure syntax, `function () {};`, first class callable `foo(...)`, or arrow functions `fn () => 1;`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instantiation-of-class-closure-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instantiation-of-class-closure-is-not-allowed.html","name":"Instantiation of class Closure is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``Closure`` class is a PHP native class, which cannot be directly instantiated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instantiation-of-class-closure-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

new Closure();

?>
```

## Alternatives
+ Use the closure syntax.
+ Use the arrow function syntax.
+ Use the first class callable syntax.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()