# syntax error, unexpected 'match'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'match'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'match'.html","name":"syntax error, unexpected 'match'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-03-16T10:39:42+01:00","dateModified":"2025-03-16T10:39:42+01:00","description":"This error is related to ``match`` being a PHP keyword","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/syntax-error,-unexpected-'match'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is related to `match` being a PHP keyword. Since PHP 8.0, it cannot be used anymore as a class or interface name. When moving from PHP 7 to 8, any traditional usage of `match` where a class name is expected shall produce such an error.

In the illustrations, no more details are provided about the reason why `match` is not allowed. Other situation may provide better hints.

This error applies to all PHP keywords. `match` is only the most common, as it is a new PHP 8.0 keyword.

## Example

```php
<?php

// Cannot use Match here.
interface X extends Match { }

// Cannot use Match here.
class Y implements Match { 

    // Cannot use Match here.
    use Match;
}

?>
```

## Alternatives
+ Rename ``Match`` to something that is not a PHP keyword.
+ Stay on PHP 7.x.
