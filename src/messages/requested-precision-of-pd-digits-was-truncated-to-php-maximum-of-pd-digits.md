# Requested precision of %d digits was truncated to PHP maximum of %d digits

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits.html","name":"Requested precision of %d digits was truncated to PHP maximum of %d digits","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/requested-precision-of-%d-digits-was-truncated-to-php-maximum-of-%d-digits.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A decimal number is being represented as a string, with a precision which is above the precision available to PHP itself. Since no more data is available, the requested precision was not met.

## Example

```php
<?php

printf(%.988f,1.23456789e10);

?>
```

## Literal Examples
+ Requested precision of 20 digits was truncated to PHP maximum of 14 digits

## Alternatives
+ Reduce the requested precision, down to 54 maximum.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()