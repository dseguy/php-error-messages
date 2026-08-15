# syntax error, unexpected token ")", expecting "function" or "fn" or "static" or "#["

## Description
In this command, an attribute has been configured. The attributes can only precede a structure, such as a class, method or function. 

In this case, the attribute has been placed inside an function call, so only a closure can be declared.

This error appears after PHP 8.0: this is when the `#[` token was introduced. Until that version, `#` introduces a comment, until the end of the line.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html","name":"syntax error, unexpected token \")\", expecting \"function\" or \"fn\" or \"static\" or \"#[\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In this command, an attribute has been configured","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-\")\",-expecting-\"function\"-or-\"fn\"-or-\"static\"-or-\"#[\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

foo(#[a]);

function foo(Closure $f) {}

?>
```

## Alternatives
+ Finish declaring a closure, with ``fn`` or ``function`` in the argument.
+ Remove the attribute.
+ Turn the attribute into a comment.

## Related error messages
+ [syntax-error,-unexpected-token-";",-expecting-"function"-or-"fn"-or-"static"-or-"#["](asdf)
