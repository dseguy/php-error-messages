# syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','.html","name":"syntax error, unexpected '::' (T_PAAMAYIM_NEKUDOTAYIM), expecting ';' or ','","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Using the static class syntax directly on an interpolated string was not possible until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'::'-(t_paamayim_nekudotayim),-expecting-';'-or-','.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Using the static class syntax directly on an interpolated string was not possible until PHP 8.0. Until then, it reported a syntax error.

## Example

```php
<?php

class Bar {
    static function foo() {}
    static $property = 3;
    const C = 4;
}

$a = "ar";
echo "B$a"::foo();
echo "B$a"::$property;
echo "B$a"::C;

?>
```

## Alternatives
+ Upgrade to PHP 8.0 or more recent.
+ Store the class name in a variable, and use that variable instead of the direct string.

## Related error messages
+ [syntax-error,-unexpected-'[',-expecting-';'-or-','](syntax-error,-unexpected-\[,-expecting-;-or-,.html)
