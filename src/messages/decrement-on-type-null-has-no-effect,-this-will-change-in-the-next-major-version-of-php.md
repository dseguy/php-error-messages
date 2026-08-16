# Decrement on type null has no effect, this will change in the next major version of PHP

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-type-null-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-type-null-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html","name":"Decrement on type null has no effect, this will change in the next major version of PHP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Pre or post increment on a ``null`` leaves the value unchanged","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/decrement-on-type-null-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Pre or post increment on a `null` leaves the value unchanged. While PHP updates strings, integers, floats with the post- or pre-increment operators, null are immune. 

Until PHP 8.3, it was silently done. In PHP 8.3, it raises a deprecation warning, and it will be removed in PHP 9.0. 

Post increment, pre increment, as well as increment and decrement are affected by that warning. str_increment() and str_decrement() refuses to use null, due to type.

## Example

```php
<?php

$a = null;
$a--;
--$a;
// $a === null

?>
```

## Alternatives
+ Avoid initializing variables with null before decrementing them.
+ In case of doubt, check the type before the increment.

## Related error messages
+ [increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php](increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html)
+ [decrement-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php](decrement-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html)

## Related error messages
+ [NewPHPerrormessagesinPHP83](https://www.exakat.io/en/new-php-error-messages-in-php-8-3/)
