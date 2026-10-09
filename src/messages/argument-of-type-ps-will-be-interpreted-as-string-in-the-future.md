# Argument of type %s will be interpreted as string in the future

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-of-type-ps-will-be-interpreted-as-string-in-the-future.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-of-type-ps-will-be-interpreted-as-string-in-the-future.html","name":"Argument of type %s will be interpreted as string in the future","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T09:11:08+02:00","dateModified":"2026-09-24T09:11:08+02:00","description":"All of the ``ctype_*()`` functions (``ctype_digit()``, ``ctype_alpha()``, ``ctype_alnum()``, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/argument-of-type-ps-will-be-interpreted-as-string-in-the-future.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
All of the `ctype_*()` functions (`ctype_digit()`, `ctype_alpha()`, `ctype_alnum()`, etc.) accept a `string`. For backward compatibility with very old PHP versions, though, when an `int` between -128 and 255 was passed instead, it was silently treated as a single ASCII character code (as if `chr()` had been called first) rather than being converted to its decimal string representation -- so `ctype_digit(123)` tested the character `chr(123)` (`{`), not the string `'123'`, which is a frequent source of confusion.

As of PHP 8.1, passing anything other than a string to a `ctype_*()` function emits this deprecation notice, warning that the value will be converted to a plain string instead of being interpreted as a codepoint once the legacy behaviour is removed.

## Example

```php
<?php

// 123 is not a string, so ctype_digit() has always treated it as an
// ASCII codepoint (like chr(123)) instead of the string "123".
var_dump(ctype_digit(123));

?>
```

## Literal Examples
+ ctype_digit(): Argument of type int will be interpreted as string in the future

## Alternatives
+ Cast the value to string explicitly if a numeric-looking value was intended, e.g. ctype_digit((string) $value).
+ Call chr() explicitly first if the intent really was to test a single ASCII codepoint, e.g. ctype_digit(chr($value)).
+ Use is_int()/is_numeric() instead of ctype_digit() when the input may not already be a string.

## Related error messages
+ [PHP RFC: Deprecations for PHP 8.1](https://wiki.php.net/rfc/deprecations_php_8_1)
+ [ctype_digit manual](https://www.php.net/manual/en/function.ctype-digit.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()