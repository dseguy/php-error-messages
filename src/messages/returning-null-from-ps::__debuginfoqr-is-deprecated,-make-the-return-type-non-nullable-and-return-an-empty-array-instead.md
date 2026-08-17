# Returning null from %s::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-null-from-ps::__debuginfoqr-is-deprecated,-make-the-return-type-non-nullable-and-return-an-empty-array-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-null-from-ps::__debuginfoqr-is-deprecated,-make-the-return-type-non-nullable-and-return-an-empty-array-instead.html","name":"Returning null from %s::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-16T20:13:14+00:00","dateModified":"2026-08-16T20:13:14+00:00","description":"The ``__debugInfo()`` magic method controls what ``var_dump()`` displays for instances of the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-null-from-ps::__debuginfoqr-is-deprecated,-make-the-return-type-non-nullable-and-return-an-empty-array-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `__debugInfo()` magic method controls what `var_dump()` displays for instances of the class. It must return an array; historically, returning `null` was also tolerated and treated the same as an empty array (hiding all properties).

This message is emitted at class-declaration time whenever `__debugInfo()` is declared with a return type that allows `null` (`?array`, `array|null`, and similar), regardless of whether the method is ever actually called or ever really returns `null`. Since `null` and `[]` are handled identically, keeping the return type nullable serves no purpose, so PHP 8.6 deprecates it in favor of a strict `array` return type.

This is a compile-time counterpart to "Returning null from %s::__debugInfo() is deprecated, return an empty array instead", which instead fires at call time for a method that has no return type declared at all but returns `null` anyway.

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
+ Returning null from X::__debugInfo() is deprecated, make the return type non-nullable and return an empty array instead

## Alternatives
+ Declare ``__debugInfo(): array`` instead of ``__debugInfo(): ?array`` (or ``array|null``).
+ Return an empty array ``[]`` instead of ``null`` from ``__debugInfo()``.

## Related error messages
+ [returning-null-from-%s::__debuginfo()-is-deprecated,-return-an-empty-array-instead](returning-null-from-%s::\_\_debuginfo\(\)-is-deprecated,-return-an-empty-array-instead.html)

## Related error messages
+ [__debugInfo](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.debuginfo)
+ [var_dump](https://www.php.net/manual/en/function.var-dump.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()