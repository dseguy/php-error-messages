# Arrow functions on the right hand side of ``|>`` must be parenthesized

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized.html","name":"Arrow functions on the right hand side of ``|>`` must be parenthesized","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/arrow-functions-on-the-right-hand-side-of-|>-must-be-parenthesized.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The pipe operator accepts many variants of closures, such as closures, callable, arrays and first class callables. Yet, it doesn't accept direct arrow functions: they must be placed inside parenthesis. This ensures the parser knows when to finish the returned expression, which might also include another pipe operator.

## Example

```php
<?php

    echo 'a' |> fn($a) => 1;

?>
```

## Alternatives
+ Use a closure.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()