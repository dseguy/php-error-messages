# Cannot bind an instance to a static closure

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-an-instance-to-a-static-closure.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-an-instance-to-a-static-closure.html","name":"Cannot bind an instance to a static closure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-25T11:42:44+01:00","dateModified":"2026-07-13T20:51:12+02:00","description":"The ``Closure::bind()`` method gives the scope of execution of a closure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-bind-an-instance-to-a-static-closure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

In more recent PHP versions, this error message is now :ref:`cannot-bind-an-instance-to-a-static-closure,-this-will-be-an-error-in-php-9`.