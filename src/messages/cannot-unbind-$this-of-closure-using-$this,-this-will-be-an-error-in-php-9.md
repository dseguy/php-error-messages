# Cannot unbind $this of closure using $this, this will be an error in PHP 9

## Description
A closure literal that references `$this` in its body captures the enclosing object when it is created. Rebinding it to `null` with `bindTo()` or `Closure::bind()` would leave the body referencing `$this` with nothing bound to it, so the operation is refused.

A closure that does not use `$this` in its body can still be unbound safely; the restriction only applies when `$this` is actually referenced.

Since PHP 8.5, this operation already emitted an `E_WARNING` and the bind silently failed, returning `null`. It is now deprecated and will become a fatal error in PHP 9.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html","name":"Cannot unbind $this of closure using $this, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 17:17:46 +0000","dateModified":"Fri, 24 Jul 2026 17:17:46 +0000","description":"A closure literal that references ``$this`` in its body captures the enclosing object when it is created","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    public $prop = 'hello';

    public function getClosure() {
        return function () {
            return $this->prop;
        };
    }
}

$x = new X;
$fn = $x->getClosure();
$fn2 = $fn->bindTo(null);
var_dump($fn2);

?>
```

## Literal Examples
+ Cannot unbind $this of closure using $this, this will be an error in PHP 9

## Alternatives
+ If the closure needs to run without an object context, remove every use of ``$this`` from its body.
+ Keep the closure bound to the object and pass the values it needs as parameters instead of relying on unbinding.

## Related error messages
+ [cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9](cannot-unbind-$this-of-method,-this-will-be-an-error-in-php-9.html)
+ [cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9](cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html)

## Related error messages
+ [Closure::bindTo](https://www.php.net/manual/en/closure.bindto.php)
+ [Closure::bind](https://www.php.net/manual/en/closure.bind.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[closure](closure)