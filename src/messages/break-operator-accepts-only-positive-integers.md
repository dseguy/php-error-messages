# break operator accepts only positive integers

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/break-operator-accepts-only-positive-integers.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/break-operator-accepts-only-positive-integers.html","name":"break operator accepts only positive integers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-01-30T06:28:45+01:00","dateModified":"2025-01-24T15:11:55+01:00","description":"``break`` indicates the number of nested loop to break from","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/break-operator-accepts-only-positive-integers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`break` indicates the number of nested loop to break from. The minimum is 1. 0 would be a no operation, and shall be skipped. Negative numbers or decimals make no sense.

## Example

```php
<?php

$a = [];
foreach($a as $b) {
    break 0;
    
}

?>
```

## Alternatives
+ Remove the continue command.
+ Remove the 0.

## Related error messages
+ [continue-operator-accepts-only-positive-integers](continue-operator-accepts-only-positive-integers.html)
