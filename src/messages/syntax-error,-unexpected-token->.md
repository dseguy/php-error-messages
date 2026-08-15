# syntax error, unexpected token ">"

## Description
This syntax error is characteristic of the pipe operator `|>` being used in version older than PHP 8.5.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\">\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\">\".html","name":"syntax error, unexpected token \">\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This syntax error is characteristic of the pipe operator ``|>`` being used in version older than PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\">\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

'abc' |> strtoupper(...);

?>
```

## Alternatives
+ Upgrade to PHP 8.5.
+ Nest the calls, instead of using the pipe operator.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()