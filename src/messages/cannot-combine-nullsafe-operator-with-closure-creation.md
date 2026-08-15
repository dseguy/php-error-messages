# Cannot combine nullsafe operator with Closure creation

## Description
PHP 8.1 introduced the first class callable syntax, using `(...)` to create a `Closure` from a method or function call, without invoking it.

The nullsafe operator `?->` short-circuits the call when the object is `null`, evaluating to `null` instead. Combined with Closure creation, this would mean the expression sometimes returns a `Closure` and sometimes `null`, which is not a coherent result for the engine to compile.

This combination is therefore forbidden, and detected at compile time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-combine-nullsafe-operator-with-closure-creation.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-combine-nullsafe-operator-with-closure-creation.html","name":"Cannot combine nullsafe operator with Closure creation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:15:40 +0000","dateModified":"Wed, 05 Aug 2026 16:15:40 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-combine-nullsafe-operator-with-closure-creation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public function foo() {}
}

$x = new X();

$closure = $x?->foo(...);

?>
```

## Alternatives
+ Use the ``->`` operator instead of ``?->``, making sure the object is never ``null`` at that point.
+ Check the object for ``null`` explicitly, before creating the Closure.

## Related error messages
+ [can't-use-nullsafe-operator-in-write-context](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()