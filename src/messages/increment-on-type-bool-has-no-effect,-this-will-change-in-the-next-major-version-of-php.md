# Increment on type bool has no effect, this will change in the next major version of PHP

## Description
Post increment on a boolean leaves the value unchanged. While PHP updates strings, integers, floats with the post-increment operator, booleans are immune. 

Until PHP 8.3, it was silently done. In PHP 8.3, it raises a deprecation warning, and it will be removed in PHP 9.0. 

Post increment, pre increment, as well as increment and decrement are affected by that warning. str_increment() and str_decrement() refuses to use boolean, due to type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html","name":"Increment on type bool has no effect, this will change in the next major version of PHP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Post increment on a boolean leaves the value unchanged","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/increment-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$a = true;
$a++;
// $a = true

$b = false;
--$b;
// $b = false

?>
```

## Alternatives
+ Avoid initializing variables with booleans before incrementing them.
+ In case of doubt, check the type before the increment.

## Related error messages
+ [decrement-on-type-bool-has-no-effect,-this-will-change-in-the-next-major-version-of-php](asdf)
+ [decrement-on-type-null-has-no-effect,-this-will-change-in-the-next-major-version-of-php](asdf)

## Related error messages
+ [NewPHPerrormessagesinPHP83](https://www.exakat.io/en/new-php-error-messages-in-php-8-3/)
