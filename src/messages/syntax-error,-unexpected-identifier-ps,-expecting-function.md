# syntax error, unexpected identifier "%s", expecting "function"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"function\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"PHP identified a name in the body of a class, although it was not preceded by a keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"function\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP identified a name in the body of a class, although it was not preceded by a keyword.

The error may suggest `function`, but any definition keyword will do: `private`, `protected`, `public`, `var`, `const`, `function`, `use`.

## Example

```php
<?php

class X {
    publicfunction foo() {}
}

?>
```

## Literal Examples
+ syntax error, unexpected identifier "publicfunction", expecting "function"

## Alternatives
+ Add a definition keyword before the name.
+ Fix the syntax and make a keyword appear at the beginning of the definition.

In previous PHP versions, this error message used to be :ref:`syntax-error,-unexpected-identifier-"%s",-expecting-"function"-or-"const"`.