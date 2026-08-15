# Cannot rebind scope of closure created from method, this will be an error in PHP 9

## Description
When a closure is created from an object method (`$obj->method(...)`), its scope and binding are tied to the originating object. Attempting to rebind that closure to a different scope or object using `Closure::bind()` or `Closure::bindTo()` is not allowed.

In PHP 7.0, this was silently accepted. Since PHP 8.0, it raises a warning. In PHP 9.0, it will be a fatal error.

The restriction exists because a method-bound closure captures the object's internal context. Rebinding it would violate encapsulation by granting access to private and protected members of an unrelated class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html","name":"Cannot rebind scope of closure created from method, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:17:35 +0000","dateModified":"Fri, 24 Jul 2026 17:17:35 +0000","description":"When a closure is created from an object method (``$obj->method(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public function method() {}
}

class Y {}

$x = new X;
$fn = $x->method(...);
$fn->bindTo($x, Y::class);

?>
```

## Literal Examples
+ Cannot rebind scope of closure created from method, this will be an error in PHP 9

## Alternatives
+ Create the closure from within the class itself using ``[self, 'method']`` or ``Closure::fromCallable()`` to allow rebinding.
+ Avoid rebinding method-bound closures; use ``call_user_func()`` or ``$closure(...)`` with the original binding.
+ If you need a rebound closure, create a standalone closure that wraps the method call.

## Related error messages
+ [cannot-rebind-scope-of-closure-created-from-method](cannot-rebind-scope-of-closure-created-from-method.html)
+ [cannot-bind-an-instance-to-a-static-closure](cannot-bind-an-instance-to-a-static-closure.html)
+ [cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9](cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html)
+ [cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9](cannot-bind-method-%s::%s\(\)-to-object-of-class-%s,-this-will-be-an-error-in-php-9.html)
+ [cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html)
+ [cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9](cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html)

## Related error messages
+ [Closure::bind](https://www.php.net/manual/en/closure.bind.php)
+ [Closure::fromCallable](https://www.php.net/manual/en/closure.fromcallable.php)

In previous PHP versions, this error message used to be :ref:`cannot-rebind-scope-of-closure-created-from-method`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()