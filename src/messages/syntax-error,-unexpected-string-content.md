# syntax error, unexpected string content

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-string-content.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-string-content.html","name":"syntax error, unexpected string content","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error appears when a single quote string is not properly closed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-string-content.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when a single quote string is not properly closed. In the example, there is an opening single quote, but not a closing one. PHP tries to use the rest of the code as a literal string, and ends up without tokens to wrap up the code legally.

## Example

```php
<?php

{ $a = '1+2; }
```

## Alternatives
+ Close the string with a single quote.
+ Close the string with a double quote.

## Related error messages
+ [unclosed-'{'](unclosed-{.html)
+ [unmatched-'}'](unmatched-}.html)
+ [unmatched-')'](unmatched-\).html)
+ [unmatched-']'](unmatched-\].html)
