# syntax error, unexpected token "(", expecting identifier or variable or "{" or "$"

## Description
The object operators `->` and `?->` both expect a name as second operand, aka on the right. Here, the name of the method was forgotten and the operator tried to use `(` as a name, which is not allowed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-identifier-or-variable-or-\"{\"-or-\"$\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-identifier-or-variable-or-\"{\"-or-\"$\".html","name":"syntax error, unexpected token \"(\", expecting identifier or variable or \"{\" or \"$\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The object operators ``->`` and ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-identifier-or-variable-or-\"{\"-or-\"$\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// missing a method name
$object-> ();

// missing a method name
$object?-> (1);

?>
```

## Alternatives
+ Add a name after the ``->`` and ``?->``, such as ``$object->method``.
+ Add a name inside a variable after the ``->`` and ``?->``, such as ``$object->$methodName``.
+ Add a name inside an expression after the ``->`` and ``?->``, such as ``$object->{$variable . 'suffix'}()``.
+ Add a name inside an variable variable after the ``->`` and ``?->``, such as ``$object->$$variable()``.

## Related error messages
+ [syntax-error,-unexpected-token-"=",-expecting-identifier-or-variable-or-"{"-or-"$"](asdf)
