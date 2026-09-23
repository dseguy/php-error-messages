# Decrement on non-numeric string has no effect and is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-non-numeric-string-has-no-effect-and-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-non-numeric-string-has-no-effect-and-is-deprecated.html","name":"Decrement on non-numeric string has no effect and is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:45:07+00:00","dateModified":"2026-09-21T21:45:07+00:00","description":"Unlike ``++``, which performs a Perl-style alphanumeric string increment (turning ``'z'`` into ``'aa'``, for example), the ``--`` operator was never given an equivalent behaviour for non-numeric strings: applying it to something like ``'abc'`` simply leaves the string untouched","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-non-numeric-string-has-no-effect-and-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Unlike `++`, which performs a Perl-style alphanumeric string increment (turning `'z'` into `'aa'`, for example), the `--` operator was never given an equivalent behaviour for non-numeric strings: applying it to something like `'abc'` simply leaves the string untouched. That asymmetry -- `++` transforms the string but `--` silently no-ops -- is confusing and easy to miss, since no warning was previously raised.

As of PHP 8.3, decrementing a non-numeric, non-empty string emits this deprecation notice so the no-op is no longer silent. The string itself is still left unchanged, but relying on that will trigger a warning today and is expected to change behaviour in PHP 9.0.

## Example

```php
<?php

$str = 'abc';
$str--;
var_dump($str);
// still string(3) "abc" -- the decrement had no effect at all

?>
```

## Alternatives
+ Do not use -- on strings that are not guaranteed to be numeric; check is_numeric() first if the intent really is arithmetic.
+ If the goal was a Perl-style string decrement, use str_decrement() instead, which raises a ValueError for invalid input rather than doing nothing.
+ Cast to int explicitly if an arithmetic decrement starting from 0 was intended: $n = (int) $str; $n--;

## Related error messages
+ [decrement-on-empty-string-is-deprecated-as-non-numeric](decrement-on-empty-string-is-deprecated-as-non-numeric.html)
+ [increment-on-non-alphanumeric-string-is-deprecated](increment-on-non-alphanumeric-string-is-deprecated.html)

## Related error messages
+ [PHP RFC: Saner Increment/Decrement operators](https://wiki.php.net/rfc/saner-inc-dec-operators)
+ [Increment/decrement operators manual](https://www.php.net/manual/en/language.operators.increment.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()