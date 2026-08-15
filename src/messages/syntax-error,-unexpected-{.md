# syntax error, unexpected '{'

## Description
This error arise when the old curly braces syntax is used to access an element in an array. This syntax was deprecated in PHP 7.x and removed entirely in 8.0. It also was left as a syntax error since PHP 8.3.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'{'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'{'.html","name":"syntax error, unexpected '{'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error arise when the old curly braces syntax is used to access an element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'{'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array[1]{0};

?>
```

## Alternatives
+ Use the square brackets to access array elements.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()