# syntax error, unexpected token "#[", expecting "]"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\"]\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\"]\".html","name":"syntax error, unexpected token \"#[\", expecting \"]\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"#[\",-expecting-\"]\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to nest attributes, so the first attribute must be finished, with a closing square bracket, before opening the second one.

## Example

```php
<?php

#[A
#[B]
class X {}

?>
```

## Alternatives
+ Close the first attribute with a closing square bracket.
+ Remove the extra opening ``#[`` attribute, and use a comma.
