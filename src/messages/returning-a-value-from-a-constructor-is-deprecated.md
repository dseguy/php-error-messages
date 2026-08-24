# Returning a value from a constructor is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-a-value-from-a-constructor-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-a-value-from-a-constructor-is-deprecated.html","name":"Returning a value from a constructor is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"``new X`` always evaluates to the newly created instance, no matter what ``__construct()`` returns: any value returned from a constructor is discarded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-a-value-from-a-constructor-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`new X` always evaluates to the newly created instance, no matter what `__construct()` returns: any value returned from a constructor is discarded.

Since explicitly returning a value from `__construct()` is therefore always misleading dead code, PHP 8.6 deprecates it. A bare `return;` with no expression, used purely to exit the constructor early, remains unaffected.

## Example

```php
<?php

class X {
    public function __construct() {
        return 42;
    }
}

$x = new X;
var_dump($x);

?>
```

## Literal Examples
+ Returning a value from a constructor is deprecated

## Alternatives
+ Use a bare ``return;`` (with no expression) to exit the constructor early.
+ If you need to build and hand back an object based on some logic, use a static factory method instead of relying on ``new`` and a constructor return value.

## Related error messages
+ [returning-a-value-from-a-destructor-is-deprecated](returning-a-value-from-a-destructor-is-deprecated.html)
+ [making-a-constructor-a-generator-is-deprecated](making-a-constructor-a-generator-is-deprecated.html)
+ [constructor-%s::%s()-cannot-declare-a-return-type](constructor-%s::%s\(\)-cannot-declare-a-return-type.html)
+ [method-%s::__construct()-cannot-declare-a-return-type](method-%s::\_\_construct\(\)-cannot-declare-a-return-type.html)

## Related error messages
+ [Constructors and destructors](https://www.php.net/manual/en/language.oop5.decon.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[constructorReturnDeprecated](constructorReturnDeprecated)