# syntax error, unexpected token ","

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\".html","name":"syntax error, unexpected token \",\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"A comma is used to separate arguments in a function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\",\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A comma is used to separate arguments in a function call. A functioncall may also use named parameters, to identify the arguments. In this case, the name of the parameter is provided, but not its value.

## Example

```php
<?php

    #[Attribute(name: , value: 1)]
    class X {}

?>
```

## Alternatives
+ Remove the parameter name from the function call.
+ Provide a value for the parameter name in the functioncall.

## Related error messages
+ [syntax-error,-unexpected-token-",",-expecting-"]"](syntax-error,-unexpected-token-,,-expecting-\].html)
+ [syntax-error,-unexpected-token-",",-expecting-variable-or-"$"](syntax-error,-unexpected-token-,,-expecting-variable-or-$.html)
+ [syntax-error,-unexpected-token-",",-expecting-variable](syntax-error,-unexpected-token-,,-expecting-variable.html)
