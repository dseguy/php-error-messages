# Cannot rebind scope of closure created from function, this will be an error in PHP 9

## Description
A closure created from a plain, top-level function (`Closure::fromCallable('foo')` or `foo(...)`) has no class scope: it was never attached to an object or a class in the first place. Passing a scope argument to `Closure::bind()` or `Closure::bindTo()` on such a closure has nothing to rebind.

Since PHP 8.5, this operation already emitted an `E_WARNING` and the bind silently failed, returning `null`. It is now deprecated and will become a fatal error in PHP 9.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html","name":"Cannot rebind scope of closure created from function, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:02:08 +0000","dateModified":"Fri, 24 Jul 2026 17:02:08 +0000","description":"A closure created from a plain, top-level function (``Closure::fromCallable('foo')`` or ``foo(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {}

function foo() {
    return __FUNCTION__;
}

$fn = Closure::fromCallable('foo');
$fn2 = Closure::bind($fn, new X, X::class);
var_dump($fn2);

?>
```

## Literal Examples
+ Cannot rebind scope of closure created from function, this will be an error in PHP 9

## Alternatives
+ Do not attempt to bind a scope to a closure created from a plain function; it has none.
+ If scoped behaviour is required, define the closure inside the class (as a method or a property initializer) instead of wrapping a free function.

## Related error messages
+ [cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html)
+ [cannot-rebind-scope-of-closure-created-from-method](cannot-rebind-scope-of-closure-created-from-method.html)
+ [cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9](cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html)

## Related error messages
+ [Closure::bind](https://www.php.net/manual/en/closure.bind.php)
+ [Closure::fromCallable](https://www.php.net/manual/en/closure.fromcallable.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[closure](closure)