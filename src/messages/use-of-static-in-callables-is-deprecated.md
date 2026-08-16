# Use of "static" in callables is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-\"static\"-in-callables-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-\"static\"-in-callables-is-deprecated.html","name":"Use of \"static\" in callables is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-\"static\"-in-callables-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.2, it is not possible anymore to use `static` as a string, when creating a callable. `static` is a keyword with contextual meaning. Then, it has little meaning as a string and leads to confusion.

## Example

```php
<?php

class X {
    static function foo() {
        echo __METHOD__;
    }

    static function test() {
        call_user_func(array('static','foo'));
    }
}

X::test();

?>
```

## Alternatives
+ Use ``static::class`` to make this class name non-ambiguous.
+ Use another way to create a closure for the method, such as ``static::foo(...)``.

## Related error messages
+ [use-of-"self"-in-callables-is-deprecated](use-of-self-in-callables-is-deprecated.html)
+ [use-of-"parent"-in-callables-is-deprecated](use-of-parent-in-callables-is-deprecated.html)

## Related error messages
+ [PHPRFCDeprecatepartiallysupportedcallables](https://wiki.php.net/rfc/deprecate_partially_supported_callables)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[codes/staticInCallable](codes/staticInCallable)