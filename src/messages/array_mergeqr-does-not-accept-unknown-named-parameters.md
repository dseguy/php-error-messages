# array_merge() does not accept unknown named parameters

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_merge()-does-not-accept-unknown-named-parameters.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_merge()-does-not-accept-unknown-named-parameters.html","name":"array_merge() does not accept unknown named parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-17T17:03:30+01:00","dateModified":"2026-04-10T10:58:03+02:00","description":"array_merge() accepts one parameter, called ``$arrays``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array_merge()-does-not-accept-unknown-named-parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
array_merge() accepts one parameter, called `$arrays`. In fact, it is a variadic parameter, so this parameter may be repeated as needed. Yet, there is only one name for it.

When using array_merge() with a variadic argument, PHP tries to match the keys of the array with the parameters, and in this case, fails for all but one: `$arrays`. 

The solution is to spread the array, after removing the string keys: with integer keys, PHP will not check the names.

There are several PHP native functions that behave like that: array_merge(), array_diff_key(), etc. In fact, any native method which has a variadic parameter.

PHP doesn't emit an error when spreading an array with unknown keys in a custom function.

## Example

```php
<?php

$a = ['x' => [1], 'y' => [3]];

foo(...$a);
//array_merge() does not accept unknown named parameters
array_merge(...$a);

function foo($x, array ...$arrays) {
    print_r($arrays);
}

?>
```

## Alternatives
+ Apply array_values() to the array that is used with array_merge().
