# syntax error, unexpected identifier "%s", expecting "function" or "const"

## Description
PHP identified a name in the body of a class, although it was not preceded by a keyword.

The error may suggest `function`, but any definition keyword will do: `private`, `protected`, `public`, `var`, `const`, `function`, `use`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\"-or-\"const\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\"-or-\"const\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"function\" or \"const\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"PHP identified a name in the body of a class, although it was not preceded by a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\"-or-\"const\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    publicfunction foo() {}
}

?>
```

## Literal Examples
+ syntax error, unexpected identifier "publicfunction", expecting "function" or "const"

## Alternatives
+ Add a definition keyword before the name.
+ Fix the syntax and make a keyword appear at the beginning of the definition.

In more recent PHP versions, this error message is now :ref:`syntax-error,-unexpected-identifier-"%s",-expecting-"function"`.