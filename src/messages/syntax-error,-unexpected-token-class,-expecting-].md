# syntax error, unexpected token "class", expecting-"]"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-class,-expecting-].html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-class,-expecting-].html","name":"syntax error, unexpected token \"class\", expecting-\"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-15T20:01:52+00:00","dateModified":"2026-07-15T20:01:52+00:00","description":"The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-class,-expecting-].html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The previous attribute was not closed with a square bracket, and its syntax is spilling over the supporting class.

## Example

```php
<?php

#[Attribute()
class X {}

?>
```

## Alternatives
+ Remove the attribute.
+ Close the attribute with a square bracket.

## Related error messages
+ [syntax-error,-unexpected-token-"::",-expecting-"]"](syntax-error,-unexpected-token-::,-expecting-\].html)
+ [syntax-error,-unexpected-token-"public",-expecting-"]"](syntax-error,-unexpected-token-public,-expecting-\].html)
