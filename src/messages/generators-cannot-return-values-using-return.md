# Generators cannot return values using "return"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generators-cannot-return-values-using-return.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generators-cannot-return-values-using-return.html","name":"Generators cannot return values using \"return\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-03-31T09:10:46+00:00","dateModified":"2026-03-31T09:10:46+00:00","description":"In PHP 5","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/generators-cannot-return-values-using-return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In PHP 5.x, generators were not allowed to have return values. This feature was added in PHP 7.0, and, after running the full course, generator deliver their return value when calling the `getReturn` method.

## Example

```php
<?php

function foo() {
    yield 1;
    
    return 2;
}

?>
```

## Alternatives
+ Upgrade to PHP 7.0 or more recent.
+ Use a global variable to export data from the method.
