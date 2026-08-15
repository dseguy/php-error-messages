# syntax error, unexpected token "{", expecting variable

## Description
With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\",-expecting-variable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\",-expecting-variable.html","name":"syntax error, unexpected token \"{\", expecting variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 18:57:19 +0000","dateModified":"Wed, 15 Jul 2026 18:57:19 +0000","description":"With the last comma in the signature of the method, PHP expects another parameter after it, or the end of the signature with a closing parenthesis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"{\",-expecting-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class A {
    public function __construct($b,
     { }
}
?>
```

## Alternatives
+ Add a closing parenthesis.
+ Add another parameter, then a closing parenthesis.

## Related error messages
+ [syntax-error,-unexpected-token-")",-expecting-variable](syntax-error,-unexpected-token-\),-expecting-variable.html)
