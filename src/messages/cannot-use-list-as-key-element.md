# Cannot use list as key element

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-list-as-key-element.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-list-as-key-element.html","name":"Cannot use list as key element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-28T08:09:58+02:00","dateModified":"2026-07-28T08:09:58+02:00","description":"Since PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-list-as-key-element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 7.1, `foreach` can destructure the value of each entry with `list()` (or its short `[]` syntax): `foreach ($array as $key => list($a, $b))`. The key part, on the other hand, is always a single target: a variable, a property, or an array offset. It cannot itself be a `list()` pattern, since a single array key has nothing to be destructured into several variables.

## Example

```php
<?php

$array = [['a', 'b'], 'c', 'd'];

foreach ($array as list($key) => $value) {
}

?>
```

## Literal Examples
+ Cannot use list as key element

## Alternatives
+ Use a plain variable for the key, and only destructure the value with ``list()``.

## Related error messages
+ [cannot-use-list()-as-standalone-expression](cannot-use-list\(\)-as-standalone-expression.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()