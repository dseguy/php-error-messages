# syntax error, unexpected token "private", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"private\",-expecting-\")\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"private\",-expecting-\")\".html","name":"syntax error, unexpected token \"private\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:47+00:00","dateModified":"2026-03-31T09:10:47+00:00","description":"``private`` is not expected at this position in the code, as the previous property ``$a`` is not finished","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"private\",-expecting-\")\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`private` is not expected at this position in the code, as the previous property `$a` is not finished. It would be finished with a closing parenthesis `)`, as suggested by the error message,  or a `comma`, to introduce the next property.

This error message might have other variations, such as `protected`, `public`, `static`, `readonly`, `abstract`, `final`.

## Example

```php
<?php

class ProcessController extends AbstractController
{
    public function __construct(
        public A $a
        private B $b,
    ) {
    }
}
?>
```

## Alternatives
+ Add a comma to introduce the next property or argument.
+ Add a closing parenthesis to close the signature and the previous property.
