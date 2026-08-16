# Cannot unbind $this of method, this will be an error in PHP 9

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html","name":"Cannot unbind $this of method, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:17:57 +0000","dateModified":"Fri, 24 Jul 2026 17:17:57 +0000","description":"A closure created directly from a non-static method (``$obj->method(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A closure created directly from a non-static method (`$obj->method(...)` or `ReflectionMethod::getClosure()`) is a `$this`-call in disguise: the method body may use `$this` freely, whether or not it is written explicitly. Since PHP 8.0 removed static calls to non-static methods, `$this` is guaranteed to exist whenever such a method runs, so `bindTo(null)` can no longer strip it.

Since PHP 8.5, this operation already emitted an `E_WARNING` and the bind silently failed, returning `null`. It is now deprecated and will become a fatal error in PHP 9.0.

## Example

```php
<?php

class X {
    public function method() {
        return __METHOD__;
    }
}

$x = new X;
$fn = $x->method(...);
$fn2 = $fn->bindTo(null);
var_dump($fn2);

?>
```

## Literal Examples
+ Cannot unbind $this of method, this will be an error in PHP 9

## Alternatives
+ Keep the closure bound to the object; call it with the original binding instead of unbinding ``$this``.
+ If a scope-free version of the logic is needed, extract it into a standalone function that does not rely on the method's ``$this``.

## Related error messages
+ [cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9](cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html)
+ [cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html)

## Related error messages
+ [Closure::bindTo](https://www.php.net/manual/en/closure.bindto.php)
+ [Closure::bind](https://www.php.net/manual/en/closure.bind.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[closure](closure)