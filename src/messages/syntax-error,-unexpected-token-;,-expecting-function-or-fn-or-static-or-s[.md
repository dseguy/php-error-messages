# syntax error, unexpected token ";", expecting "function" or "fn" or "static" or "#["

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html","name":"syntax error, unexpected token \";\", expecting \"function\" or \"fn\" or \"static\" or \"#[\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"In this command, an attribute has been configured","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\";\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In this command, an attribute has been configured. The attributes can only precede a structure, such as a class, method or function. 

In this case, the attribute has been placed inside an expression, so only a closure can be declared: hence, the request for a `function`, `fn`. That closure could be `static` or have another attribute.

In the end, the closure is not compatible with the `+` or similar operator, so the suggestion is not valid here. It could be valid with a comma.

This error appears after PHP 8.0: this is when the `#[` token was introduced. Until that version, `#` introduces a comment, until the end of the line.

## Example

```php
<?php

1 + #[attribute];
```

## Alternatives
+ Remove the attribute.
+ Turn the ``#`` comment into a ``//`` comment.

## Related error messages
+ [syntax-error,-unexpected-token-")",-expecting-"function"-or-"fn"-or-"static"-or-"#["](syntax-error,-unexpected-token-\),-expecting-function-or-fn-or-static-or-#\[.html)
