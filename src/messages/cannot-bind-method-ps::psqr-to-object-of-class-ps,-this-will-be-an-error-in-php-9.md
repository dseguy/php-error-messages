# Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-method-ps::psqr-to-object-of-class-ps,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-method-ps::psqr-to-object-of-class-ps,-this-will-be-an-error-in-php-9.html","name":"Cannot bind method %s::%s() to object of class %s, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-17T22:59:23+02:00","dateModified":"2026-07-24T19:28:38+02:00","description":"A closure created from a non-static method (``$obj->method(","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-method-ps::psqr-to-object-of-class-ps,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A closure created from a non-static method (`$obj->method(...)` or `Closure::fromCallable()`) can only be bound to an instance of the class the method belongs to, or one of its subclasses. Binding it to an object of an unrelated class, as done above with an instance of `Y` while the method is defined on `X`, is not allowed.

Since PHP 8.5, this operation already emitted an `E_WARNING` and the bind silently failed, returning `null`. It is now deprecated and will become a fatal error in PHP 9.0.

## Example

```php
<?php

class X {
    public function method() {
        return __METHOD__;
    }
}

class Y {}

$x = new X;
$fn = $x->method(...);
$fn2 = Closure::bind($fn, new Y, Y::class);
var_dump($fn2);

?>
```

## Literal Examples
+ Cannot bind method X::method() to object of class Y, this will be an error in PHP 9

## Alternatives
+ Bind the closure to an instance of the class that declares the method, or one of its subclasses.
+ If the method should work on unrelated classes too, extract the logic into a standalone function or a trait shared by both classes.

## Related error messages
+ [cannot-bind-method-%s::%s()-to-object-of-class-%s](cannot-bind-method-%s::%s\(\)-to-object-of-class-%s.html)
+ [cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9](cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html)
+ [cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html)

## Related error messages
+ [Closure::bind](https://www.php.net/manual/en/closure.bind.php)
+ [Closure::bindTo](https://www.php.net/manual/en/closure.bindto.php)

In previous PHP versions, this error message used to be :ref:`cannot-bind-method-%s::%s()-to-object-of-class-%s`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[closure](closure)