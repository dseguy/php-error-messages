# Internal function %s%s%s() does not accept named variadic arguments

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/internal-function-pspspsqr-does-not-accept-named-variadic-arguments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/internal-function-pspspsqr-does-not-accept-named-variadic-arguments.html","name":"Internal function %s%s%s() does not accept named variadic arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-28T21:05:12+00:00","dateModified":"2026-08-28T21:05:12+00:00","description":"Internal (C-implemented) functions with a variadic parameter, such as ``array_merge()``'s ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/internal-function-pspspsqr-does-not-accept-named-variadic-arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Internal (C-implemented) functions with a variadic parameter, such as `array_merge()`'s `...$arrays`, only ever have a single name for that parameter. When a call spreads an array with string keys into such a function using `...`, PHP tries to match each key against a parameter name, and every key besides the one matching the variadic parameter's own name is rejected, since there is no other named slot for it to bind to.

This restriction is specific to internal functions: user-defined variadic functions accept arbitrary named arguments into their variadic parameter without complaint.

## Example

```php
<?php

$parts = ['x' => [1], 'y' => [2]];

array_merge(...$parts);

?>
```

## Literal Examples
+ Internal function array_merge() does not accept named variadic arguments

## Alternatives
+ Apply array_values() to the array before spreading it into the internal function, so its keys are reset to plain integers and no longer interpreted as parameter names.

In previous PHP versions, this error message used to be :ref:`array_merge()-does-not-accept-unknown-named-parameters`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, the same ArgumentCountError was thrown, but worded "%s%s%s() does not accept unknown named parameters" (e.g. "array_merge() does not accept unknown named parameters"), without the "Internal function" prefix and without naming variadic arguments specifically as the cause.](Prior to PHP 8.6, the same ArgumentCountError was thrown, but worded "%s%s%s() does not accept unknown named parameters" (e.g. "array_merge() does not accept unknown named parameters"), without the "Internal function" prefix and without naming variadic arguments specifically as the cause.)