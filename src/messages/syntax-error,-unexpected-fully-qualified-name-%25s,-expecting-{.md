# syntax error, unexpected fully qualified name "%s", expecting "{"

## Description
Until PHP 8.0, it was possible to include spaces or new lines in a namespace. They would be ignored later, but parsed and handled that way. 

In PHP 8.0, this is not possible anymore.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"{\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"{\".html","name":"syntax error, unexpected fully qualified name \"%s\", expecting \"{\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-fully-qualified-name-\"%s\",-expecting-\"{\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

namespace Vendor
\XXX;

echo 1;

?>
```

## Literal Examples
+ syntax error, unexpected fully qualified name "\XXX", expecting "{"

## Alternatives
+ Make namespaces one string, without new lines or any spaces.
