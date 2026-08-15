# Type contains both true and false, bool must be used instead

## Description
PHP has several types. They may combined to provide the same type safety one another: PHP reports those situations, and prevents them. 

Here, the `bool` type represents `true|false`. So, when both `true` and `false` are used in the type, they should be replaced with `bool`.

`bool|true` or `bool|false` yields another error; `bool&true` is not possible, at all.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-contains-both-true-and-false,-bool-must-be-used-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-contains-both-true-and-false,-bool-must-be-used-instead.html","name":"Type contains both true and false, bool must be used instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"PHP has several types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/type-contains-both-true-and-false,-bool-must-be-used-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() : int|true|false {}

?>
```

## Alternatives
+ Use the bool type instead.
+ Remove the usage of either true or false, or both.

## Related error messages
+ [duplicate-type-%s-is-redundant](duplicate-type-%s-is-redundant.html)
+ [null-cannot-be-marked-as-nullable](null-cannot-be-marked-as-nullable.html)
+ [type-%s-contains-both-object-and-a-class-type](type-%s-contains-both-object-and-a-class-type.html)
