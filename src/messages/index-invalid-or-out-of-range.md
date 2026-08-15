# Index invalid or out of range

## Description
This error message is returned by the `SplFixedArray` object, when trying to access indices outside the validity interval. A SplFixedArray has a limited number of elements, set at the beginiing, or updated laster with `setSize()`.

On a regular array, accessing an undefined index is a warning, not a fatal error.

A different message is emited when the index is not an integer.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/index-invalid-or-out-of-range.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/index-invalid-or-out-of-range.html","name":"Index invalid or out of range","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error message is returned by the ``SplFixedArray`` object, when trying to access indices outside the validity interval","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/index-invalid-or-out-of-range.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$object = new SplFixedArray(3);

$object[1] = 3;
echo $object[1]; // OK
echo $object[0]; // OK, returns null

echo $object[-1];
//Fatal error: Uncaught RuntimeException: Index invalid or out of range

?>
```

## Alternatives
+ Check the size of the array before accessing one of the index.
+ Check that the index is zero or more.
+ Use a regular array.
