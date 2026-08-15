# syntax error, unexpected token "=", expecting identifier

## Description
In this error, the declared optin name value has been removed. It could be `strict_types`, `ticks` or `encoding`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"=\",-expecting-identifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"=\",-expecting-identifier.html","name":"syntax error, unexpected token \"=\", expecting identifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In this error, the declared optin name value has been removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\"=\",-expecting-identifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

declare(= 1);

declare(= 'iso-8859-1');

?>
```

## Alternatives
+ Add ``strict_types`` before the ``=`` operator.
+ Add ``ticks`` before the ``=`` operator.
+ Add ``encoding`` before the ``=`` operator.
+ Remove the ``declare`` call.
