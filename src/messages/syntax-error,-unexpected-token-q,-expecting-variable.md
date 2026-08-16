# syntax error, unexpected token "(", expecting variable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-variable.html","name":"syntax error, unexpected token \"(\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"PHP started recognizing a property definition, with its visibility, a type and now expects a variable name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"(\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP started recognizing a property definition, with its visibility, a type and now expects a variable name. In fact, the `function` keyword was omitted.

## Example

```php
<?php

class X {
    public  __construct () {}
}

?>
```

## Alternatives
+ Add the ``function`` keyword, before the name of the method.
+ Remove the parenthesis and the following tokens, and make a proper property definition.
