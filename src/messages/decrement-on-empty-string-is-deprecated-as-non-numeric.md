# Decrement on empty string is deprecated as non-numeric

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-empty-string-is-deprecated-as-non-numeric.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-empty-string-is-deprecated-as-non-numeric.html","name":"Decrement on empty string is deprecated as non-numeric","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-21T21:45:05+00:00","dateModified":"2026-09-21T21:45:05+00:00","description":"The ``--`` operator has special, Perl-inspired handling for strings: decrementing a numeric string decrements the number, and historically decrementing a non-numeric string (including the empty string) was silently treated as if it were ``0``, so ``''--`` produced ``-1``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-empty-string-is-deprecated-as-non-numeric.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `--` operator has special, Perl-inspired handling for strings: decrementing a numeric string decrements the number, and historically decrementing a non-numeric string (including the empty string) was silently treated as if it were `0`, so `''--` produced `-1`. This 'consider as 0' behaviour is surprising, since it makes `--` on a string do something completely different from what `++` does on the very same string.

As of PHP 8.3, decrementing an empty string emits this deprecation notice; the value is still coerced to `0` before the decrement for backward compatibility, but this implicit behaviour is intended to go away in PHP 9.0, as part of a broader effort to make `++`/`--` on strings saner and introduce `str_increment()` / `str_decrement()`.

## Example

```php
<?php

$str = '';
$str--;
var_dump($str);

?>
```

## Alternatives
+ Check for an empty string explicitly before decrementing, and handle it as its own case rather than relying on the implicit 0.
+ Cast to int first if a numeric decrement was actually intended: $n = (int) $str; $n--;
+ Use str_decrement() when the goal is Perl-style string decrementing rather than numeric decrementing.

## Related error messages
+ [decrement-on-non-numeric-string-has-no-effect-and-is-deprecated](decrement-on-non-numeric-string-has-no-effect-and-is-deprecated.html)
+ [increment-on-non-alphanumeric-string-is-deprecated](increment-on-non-alphanumeric-string-is-deprecated.html)

## Related error messages
+ [PHP RFC: Saner Increment/Decrement operators](https://wiki.php.net/rfc/saner-inc-dec-operators)
+ [Increment/decrement operators manual](https://www.php.net/manual/en/language.operators.increment.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()