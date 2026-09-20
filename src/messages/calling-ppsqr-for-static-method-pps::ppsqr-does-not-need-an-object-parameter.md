# Calling %pS() for static method %pS::%pS() does not need an object parameter

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-for-static-method-pps::ppsqr-does-not-need-an-object-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-for-static-method-pps::ppsqr-does-not-need-an-object-parameter.html","name":"Calling %pS() for static method %pS::%pS() does not need an object parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T22:21:00+02:00","dateModified":"2026-09-20T22:21:00+02:00","description":"``ReflectionMethod::invoke()`` and ``ReflectionMethod::invokeArgs()`` accept an object as their first argument to use as ``$this`` inside the invoked method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ppsqr-for-static-method-pps::ppsqr-does-not-need-an-object-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ReflectionMethod::invoke()` and `ReflectionMethod::invokeArgs()` accept an object as their first argument to use as `$this` inside the invoked method. For a static method there is no `$this`, so that object is simply ignored — but silently ignoring it hides a likely mistake, such as invoking the wrong method or forgetting the target is static. PHP 8.6 deprecates passing a non-null object in this case.

## Example

```php
<?php

class TestClass {
    private static function staticMethod() {
        echo "Called staticMethod()\n";
    }
}

$method = new ReflectionMethod(TestClass::class, 'staticMethod');
$instance = new TestClass();

$method->invoke($instance);

?>
```

## Literal Examples
+ Calling ReflectionMethod::invoke() for static method TestClass::staticMethod() does not need an object parameter
+ Calling ReflectionMethod::invokeArgs() for static method TestClass::staticMethod() does not need an object parameter

## Alternatives
+ Pass ``null`` as the object argument when invoking a static method: ``$method->invoke(null)``.
+ If you meant to call an instance method, check that ``$method`` really refers to it.

## Related error messages
+ [calling-%ps()-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated](calling-%ps\(\)-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated.html)

In more recent PHP versions, this error message is now :ref:`calling-%ps()-with-a-given-object-that-is-not-an-instance-of-the-class-this-property-was-declared-in-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()