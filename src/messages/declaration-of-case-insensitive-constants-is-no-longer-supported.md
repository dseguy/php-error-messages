# Declaration of case-insensitive constants is no longer supported

## Description
The define() function used to create case sensitive and case insensitive constants. This was the usage of the third parameter. 

Since PHP 8.0, only case sensitive constants may be declared, with `const` and with `define()`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-case-insensitive-constants-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-case-insensitive-constants-is-no-longer-supported.html","name":"Declaration of case-insensitive constants is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The define() function used to create case sensitive and case insensitive constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-case-insensitive-constants-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// the third parameter is now ignored
define('CONSTANT_NAME', 'constant value', true);

?>
```

## Alternatives
+ Declare variations of the constant name.
