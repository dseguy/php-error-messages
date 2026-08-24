# Returning a value from a destructor is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-a-value-from-a-destructor-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-a-value-from-a-destructor-is-deprecated.html","name":"Returning a value from a destructor is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``__destruct()`` is invoked automatically by PHP's garbage collector when an object is about to be destroyed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-a-value-from-a-destructor-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`__destruct()` is invoked automatically by PHP's garbage collector when an object is about to be destroyed; nothing ever reads or uses its return value.

Since explicitly returning a value from `__destruct()` is therefore always dead code, PHP 8.6 deprecates it. A bare `return;` with no expression, used purely to exit the destructor early, remains unaffected.

## Example

```php
<?php

class X {
    public function __destruct() {
        return 42;
    }
}

$x = new X;
unset($x);

?>
```

## Literal Examples
+ Returning a value from a destructor is deprecated

## Alternatives
+ Use a bare ``return;`` (with no expression) to exit the destructor early.
+ Remove the ``return $value;`` statement; if you need to signal something to calling code, do it before the object is unset, not from the destructor.

## Related error messages
+ [returning-a-value-from-a-constructor-is-deprecated](returning-a-value-from-a-constructor-is-deprecated.html)
+ [making-a-destructor-a-generator-is-deprecated](making-a-destructor-a-generator-is-deprecated.html)
+ [destructors-cannot-declare-a-return-type](destructors-cannot-declare-a-return-type.html)

## Related error messages
+ [Constructors and destructors](https://www.php.net/manual/en/language.oop5.decon.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[constructorReturnDeprecated](constructorReturnDeprecated)