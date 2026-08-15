# syntax error, unexpected token "::", expecting "]"

## Description
Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing `]`. The scope resolution operator `::` cannot start an expression on its own: it must be preceded by a class name, a variable or one of `self`, `parent` or `static`. Here, PHP found `::` immediately, so it reports that it was still expecting `]` to close the array access.

The same message also appears whenever a previous `[` was left unclosed, and a later, unrelated `::` is the first token that cannot continue the pending index expression.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"::\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"::\",-expecting-\"]\".html","name":"syntax error, unexpected token \"::\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 16:24:03 +0000","dateModified":"Wed, 15 Jul 2026 16:24:03 +0000","description":"Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"::\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    $arr = [1, 2, 3];
    $y = $arr[::];

?>
```

## Alternatives
+ Provide the missing class name (or ``self``, ``parent``, ``static``) before ``::``, such as ``$arr[X::CONST]``.
+ Check that every previous ``[`` in the file has a matching ``]``.

## Related error messages
+ [syntax-error,-unexpected-token-"public",-expecting-"]"](asdf)
+ [syntax-error,-unexpected-token-"class",-expecting-"]"](asdf)
+ [syntax-error,-unexpected-token-"if",-expecting-"]"](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()