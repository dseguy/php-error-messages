# Cannot use argument unpacking after named arguments

## Description
PHP 8.1 allows named arguments and argument unpacking (...$array) to be combined in the same call, but the unpacked array must come before any named arguments. Argument unpacking supplies its own set of positions/keys, and allowing it to appear after arguments already identified by name would make the resulting parameter order ambiguous, so it is rejected at compile time based on the call's syntax alone.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-argument-unpacking-after-named-arguments.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-argument-unpacking-after-named-arguments.html","name":"Cannot use argument unpacking after named arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 30 Jul 2026 07:30:10 +0000","dateModified":"Thu, 30 Jul 2026 07:30:10 +0000","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-argument-unpacking-after-named-arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo($a, $b, $c) {}

$rest = ['c' => 3];

foo(a: 1, b: 2, ...$rest);

?>
```

## Alternatives
+ Move the unpacked array before the named arguments, adjusting keys as needed: foo(...$rest, a: 1, b: 2);
+ Turn the unpacked array's values into individual named arguments.

## Related error messages
+ [cannot-combine-named-arguments-and-argument-unpacking](cannot-combine-named-arguments-and-argument-unpacking.html)
+ [cannot-use-positional-argument-after-named-argument-during-unpacking](cannot-use-positional-argument-after-named-argument-during-unpacking.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()