# syntax error, unexpected token "{", expecting ")"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-{,-expecting-r.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-{,-expecting-r.html","name":"syntax error, unexpected token \"{\", expecting \")\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:51:02+00:00","dateModified":"2026-09-18T15:51:02+00:00","description":"This is a side effect of the removed support for curly braces as array and string offset syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-token-{,-expecting-r.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is a side effect of the removed support for curly braces as array and string offset syntax. Here, the parser was reading a function call's argument list and reached the point where it expects the closing parenthesis, but found the leftover curly brace instead. This exact wording appears since PHP 8.0, when curly-brace offset access was removed from the language.

## Example

```php
<?php
    echo foo($variable{$index});
?>
```

## Alternatives
+ Refactor the curly braces to square ones.

## Related error messages
+ [syntax-error,-unexpected-token-"{"](syntax-error,-unexpected-token-{.html)
+ [array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported](array-and-string-offset-access-syntax-with-curly-braces-is-no-longer-supported.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()