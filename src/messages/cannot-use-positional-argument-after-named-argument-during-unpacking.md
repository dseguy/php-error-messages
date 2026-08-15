# Cannot use positional argument after named argument during unpacking

## Description
This error appears when using an array with a mix of integer and string keys, and spread it as arguments. The actual order of the array is used as the order of the arguments in the function call. Then, integer keys are used as positional arguments, and string keys are as named arguments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-positional-argument-after-named-argument-during-unpacking.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-positional-argument-after-named-argument-during-unpacking.html","name":"Cannot use positional argument after named argument during unpacking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"This error appears when using an array with a mix of integer and string keys, and spread it as arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-positional-argument-after-named-argument-during-unpacking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo($a, $b, $c) {}

// unpacking argument, but positional argument is misplaced
$arguments = ['a' => 1, 2, 'c' => 3];
foo(...$arguments);

// make everyone positional. It works since order is already correct
foo(...array_values($arguments));

?>
```

## Alternatives
+ Add the missing argument names to finish the argument array.
+ Move the positional argument to the beginning of the array (array_unshift, or append it at the array creation), when the argument order makes it possible.
+ Use ksort() on the keys, when it makes sense.

## Related error messages
+ [named-parameter-$%s-overwrites-previous-argument](named-parameter-$%s-overwrites-previous-argument.html)
+ [cannot-use-argument-unpacking-after-named-arguments](cannot-use-argument-unpacking-after-named-arguments.html)
