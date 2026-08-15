# Cannot unpack array with string keys

## Description
Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays. This feature was introduced in PHP 8.1, and the error message then disappeared.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unpack-array-with-string-keys.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unpack-array-with-string-keys.html","name":"Cannot unpack array with string keys","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Initialy, the ellipsis operator would only work with integer-indexed arrays, and not with string-indexed arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-unpack-array-with-string-keys.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$array = ['a' => 1, 2];
$array2 = [...$array, 3];

?>
```

## Alternatives
+ Upgrade the code to PHP 8.1 or newer.
+ Use array_keys() before using the ellipsis operator.
