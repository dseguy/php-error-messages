# syntax error, unexpected token "private", expecting "("

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-private,-expecting-q.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-private,-expecting-q.html","name":"syntax error, unexpected token \"private\", expecting \"(\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"The opening parenthesis that follows a method name is missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-private,-expecting-q.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The opening parenthesis that follows a method name is missing. It would be followed by a promoted property declaration, which starts with private.

The same error may apply with the other PHP visibilities, or property options, such as `static` or `readonly`.

## Example

```php
<?php

class X
{
    public function __construct
        private Y $y,
    ) {
    }
}

?>
```

## Alternatives
+ Add the missing opening parenthesis.
