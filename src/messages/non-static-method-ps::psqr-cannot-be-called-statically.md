# Non-static method %s::%s() cannot be called statically

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-static-method-%s::%s()-cannot-be-called-statically.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-static-method-%s::%s()-cannot-be-called-statically.html","name":"Non-static method %s::%s() cannot be called statically","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-12T21:08:01+01:00","dateModified":"2025-09-24T19:36:56+02:00","description":"While a non-static method can call a static method, the contrary is not possible","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-static-method-%s::%s()-cannot-be-called-statically.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
While a non-static method can call a static method, the contrary is not possible. In particular, the non-static method will not be able to have a valid `$this` variable, since the static call doesn't provide one.

This error is also reported when creating a closure from a non-static method. This happen even if the method is not actually called.

## Example

```php
<?php

class X {
    static function foo() {
        //Non-static method x::foo() cannot be called statically
        self::goo();
    }
    
    function goo() {}
}

(new X)->foo();

// when creating a closure
$closure = X::goo(...);

?>
```

## Literal Examples
+ Non-static method x::foo() cannot be called statically

## Alternatives
+ Make the concrete method static too.
+ Find an object to call the non-static method.

## Related error messages
+ [non-static-method-%s::%s()-should-not-be-called-statically](non-static-method-%s::%s\(\)-should-not-be-called-statically.html)

In previous PHP versions, this error message used to be :ref:`non-static-method-%s::%s()-should-not-be-called-statically`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[nonStaticMethodCalledStatically](nonStaticMethodCalledStatically)