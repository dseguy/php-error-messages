# Cannot bind an instance to a static closure, this will be an error in PHP 9

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html","name":"Cannot bind an instance to a static closure, this will be an error in PHP 9","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"The ``Closure::bind()`` method gives the scope of execution of a closure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `Closure::bind()` method gives the scope of execution of a closure. And a static closure uses no scope, so the `bind()` method fails.

## Example

```php
<?php
    $closure = static function () { return __METHOD__;};

    $closure->bindTo(new Stdclass());
    $closure();

?>
```

## Alternatives
+ Remove the static option on the closure.
+ Remove the call to ``bind()``.

## Related error messages
+ [cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-method,-this-will-be-an-error-in-php-9.html)
+ [cannot-bind-method-%s::%s()-to-object-of-class-%s,-this-will-be-an-error-in-php-9](cannot-bind-method-%s::%s\(\)-to-object-of-class-%s,-this-will-be-an-error-in-php-9.html)
+ [cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9](cannot-rebind-scope-of-closure-created-from-function,-this-will-be-an-error-in-php-9.html)
+ [cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9](cannot-unbind-$this-of-closure-using-$this,-this-will-be-an-error-in-php-9.html)

In previous PHP versions, this error message used to be :ref:`cannot-bind-an-instance-to-a-static-closure`.