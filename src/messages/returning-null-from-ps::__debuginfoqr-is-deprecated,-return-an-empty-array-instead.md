# Returning null from %s::__debugInfo() is deprecated, return an empty array instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-null-from-ps::__debuginfoqr-is-deprecated,-return-an-empty-array-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-null-from-ps::__debuginfoqr-is-deprecated,-return-an-empty-array-instead.html","name":"Returning null from %s::__debugInfo() is deprecated, return an empty array instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-13T20:51:12+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"The ``__debugInfo()`` magic method allows a class to customize what ``var_dump()`` displays for its instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-null-from-ps::__debuginfoqr-is-deprecated,-return-an-empty-array-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `__debugInfo()` magic method allows a class to customize what `var_dump()` displays for its instances. When this method returns `null`, PHP has historically treated it as an empty array, but the behavior was inconsistent.

Since PHP 8.4, returning `null` from `__debugInfo()` is deprecated. This deprecation ensures consistent behavior and explicit return types.

Returning an empty array `[]` achieves the same effect (hides all properties from `var_dump()`) while being type-safe and unambiguous.

## Example

```php
<?php

class X {
    public function __debugInfo(): ?array {
        return null;
    }
}

var_dump(new X);

?>
```

## Literal Examples
+ Returning null from X::__debugInfo() is deprecated, return an empty array instead

## Alternatives
+ Return an empty array ``[]`` instead of ``null`` from ``__debugInfo()``.
+ Remove the ``__debugInfo()`` method entirely if you want the default ``var_dump()`` behavior.
+ Return the array of properties you want to display: ``return ['key' => $this->value];``.

## Related error messages
+ [method-%s::%s()-cannot-be-static](method-%s::%s\(\)-cannot-be-static.html)
+ [returning-null-from-%s::__debuginfo()-is-deprecated,-make-the-return-type-non-nullable-and-return-an-empty-array-instead](returning-null-from-%s::\_\_debuginfo\(\)-is-deprecated,-make-the-return-type-non-nullable-and-return-an-empty-array-instead.html)

## Related error messages
+ [debuginfo](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo)
+ [var_dump](https://www.php.net/manual/en/function.var-dump.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[debugInfoCannotReturnNull](debugInfoCannotReturnNull)