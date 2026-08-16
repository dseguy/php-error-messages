# Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-bool-from-comparison-function-is-deprecated,-return-an-integer-less-than,-equal-to,-or-greater-than-zero.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-bool-from-comparison-function-is-deprecated,-return-an-integer-less-than,-equal-to,-or-greater-than-zero.html","name":"Returning bool from comparison function is deprecated, return an integer less than, equal to, or greater than zero","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``usort()`` requires a callback function, that is used to put set the order in the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-bool-from-comparison-function-is-deprecated,-return-an-integer-less-than,-equal-to,-or-greater-than-zero.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`usort()` requires a callback function, that is used to put set the order in the array. This function must return three different values: 

+ 1 if `$a > $b`
+ 0 if `$a == $b`
+ -1 if `$a < $b`

The return type should be the integer subset `[1, 0, -1]`, and since there is no such type in PHP, the `int` type shall be used. 

This is exactly compatible with the spaceship operator `<=>`. 

Also, note that any positive integer is considered as 1, and any negative integer is considered as -1. 

This applies to `usort()`, `uasort()`, `uksort()`. 

Not that without `declare(strict_types=)`, the integer result of the callback is converted into a boolean, where 1 and -1 are both `true`. This may lead to strange results.

## Example

```php
<?php

function foo($a, $b): bool { return $a > $b; }

$array = [4, 2, 3, 0];

usort($array, foo(...));

?>
```

## Alternatives
+ Use the ``int`` return type.
+ Remove the return type.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[sortClosureReturnType](sortClosureReturnType)