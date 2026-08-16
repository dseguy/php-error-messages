# syntax error, unexpected token "public", expecting "]"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"public\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"public\",-expecting-\"]\".html","name":"syntax error, unexpected token \"public\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T16:24:45+00:00","dateModified":"2026-07-15T16:24:45+00:00","description":"Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing ``]``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"public\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Inside the square brackets of an array index, PHP expects an expression identifying the key, followed by the closing `]`. `public` is a reserved word: it can only be used as a visibility modifier, never as the start of an expression, such as an unquoted array key. PHP therefore reports that it was still expecting `]` to close the array access.

The same message also appears whenever a previous `[` was left unclosed, and a later, unrelated `public` is the first token that cannot continue the pending index expression.

## Example

```php
<?php

$arr = [1, 2, 3];
$y = $arr[public];

?>
```

## Alternatives
+ Quote the key if a string was intended: ``$arr['public']``.
+ Use a constant or variable holding the intended key instead of the bare word.
+ Check that every previous ``[`` in the file has a matching ``]``.

## Related error messages
+ [syntax-error,-unexpected-token-"::",-expecting-"]"](syntax-error,-unexpected-token-::,-expecting-\].html)
+ [syntax-error,-unexpected-token-"class",-expecting-"]"](syntax-error,-unexpected-token-class,-expecting-\].html)
+ [syntax-error,-unexpected-token-"if",-expecting-"]"](syntax-error,-unexpected-token-if,-expecting-\].html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()