# Only arrays can be unpacked in constant expression

## Description
`...` may be used on both arrays and `Traversable` objects, but within a static constant expression, this operator only works on arrays, and cannot be used on objects, `Traversable`  or not.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-arrays-can-be-unpacked-in-constant-expression.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-arrays-can-be-unpacked-in-constant-expression.html","name":"Only arrays can be unpacked in constant expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-arrays-can-be-unpacked-in-constant-expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

const A = 2;

function foo($a = [...A]) {
    print_r($a);
}

foo();

?>
```

## Alternatives
+ Rewrite the expression without the ``...`` operator.
+ Convert the object into an array.

## Related error messages
+ [only-arrays-and-traversables-can-be-unpacked](asdf)
