# Can only throw objects

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can-only-throw-objects.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can-only-throw-objects.html","name":"Can only throw objects","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``throw`` keyword operates on exceptions, which are always objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can-only-throw-objects.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `throw` keyword operates on exceptions, which are always objects. So, it is not possible to throw other types, such as integers, strings or arrays.

## Example

```php
<?php

throw 1;

?>
```

## Alternatives
+ Use ``throw new Exception()``.
+ Use ``throw new Error()``.
+ Use ``throw $object``, where $object contains an error or an exception.
+ Use ``throw ($object)``, where $object contains an error or an exception.

## Related error messages
+ [clone-method-called-on-non-object](\_\_clone-method-called-on-non-object.html)
