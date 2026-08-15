# Use of "self" in callables is deprecated

## Description
Since PHP 8.2, it is not possible anymore to use `self` as a string, when creating a callable. `self` is a keyword with contextual meaning. Then, it has little meaning as a string and leads to confusion.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-\"self\"-in-callables-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-\"self\"-in-callables-is-deprecated.html","name":"Use of \"self\" in callables is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-\"self\"-in-callables-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    static function foo() {
        echo __METHOD__;
    }

    static function test() {
        call_user_func(array('self','foo'));
    }
}

X::test();

?>
```

## Alternatives
+ Use ``self::class`` to make this class name non-ambiguous.
+ Use another way to create a closure for the method, such as ``self::foo(...)``.

## Related error messages
+ [use-of-"parent"-in-callables-is-deprecated](use-of-parent-in-callables-is-deprecated.html)
+ [use-of-"static"-in-callables-is-deprecated](use-of-static-in-callables-is-deprecated.html)

## Related error messages
+ [PHPRFCDeprecatepartiallysupportedcallables](https://wiki.php.net/rfc/deprecate_partially_supported_callables)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[codes/selfInCallable](codes/selfInCallable)