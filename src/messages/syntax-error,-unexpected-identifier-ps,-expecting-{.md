# syntax error, unexpected identifier "%s", expecting "{"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"{\".html","name":"syntax error, unexpected identifier \"%s\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"In this case, PHP found two identifiers in a row: ``X`` and ``Y``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-identifier-\"%s\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In this case, PHP found two identifiers in a row: `X` and `Y`. This never happens in PHP code. Either a keyword should have separated them, or one of them is a duplicate.

## Example

```php
<?php

class X Y {}

enum E Z {}

interface I W {}

?>
```

## Alternatives
+ Add a missing keyword between the two identifiers: here, ``implements`` or ``extends`` could work.
+ Remove one of the duplicate name.
