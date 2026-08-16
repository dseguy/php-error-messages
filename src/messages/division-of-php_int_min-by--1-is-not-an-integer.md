# Division of PHP_INT_MIN by -1 is not an integer

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/division-of-php_int_min-by--1-is-not-an-integer.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/division-of-php_int_min-by--1-is-not-an-integer.html","name":"Division of PHP_INT_MIN by -1 is not an integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-01T22:43:32+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/division-of-php_int_min-by--1-is-not-an-integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In the specific case of the integer division of PHP_MIN_INT by -1, a specific error is reported: the result is not an integer. 

In fact, `- PHP_INT_MIN = PHP_INT_MAX + 1`: PHP_INT_MIN is larger than PHP_INT_MAX, in absolute value. It implies that multiplying, or dividing it by -1, cannot be represented as a integer. 

Since the `intdiv()` has a return type of `int`, returning a float is not possible. Hence, the specific error. 

Any other argument is valid, as it will be within the range of the integers. 

Last, using the `/` operator works, since the operator doesn't have a return type.

## Example

```php
<?php

intdiv(PHP_MIN_INT, -1);

?>
```

## Alternatives
+ Check both operands before feeding them to the intdiv() function.
+ Use ``/``, and then check if it is an integer or not.
+ Convert the values to float, and then, convert the result of the division to integer.
