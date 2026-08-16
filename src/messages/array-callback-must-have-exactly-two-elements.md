# Array callback must have exactly two elements

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array-callback-must-have-exactly-two-elements.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array-callback-must-have-exactly-two-elements.html","name":"Array callback must have exactly two elements","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"An array callback is an array that is used as a callback function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/array-callback-must-have-exactly-two-elements.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An array callback is an array that is used as a callback function. That structure is needed when using a method, static or not, as a callback: indeed, it requires an object or a class name, and the method name. It also does not need more elements, so two are sufficient.

## Example

```php
<?php

$a = array('a', 'b', 'c');
$a();

$e = array('d');
$e();

?>
```

## Alternatives
+ Remove any extra elements in the array, to have only two elements.
+ Add any missing elements in the array, up to two elements.

## Related error messages
+ [array-callback-has-to-contain-indices-0-and-1](array-callback-has-to-contain-indices-0-and-1.html)
