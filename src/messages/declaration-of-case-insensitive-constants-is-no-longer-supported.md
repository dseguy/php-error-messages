# Declaration of case-insensitive constants is no longer supported

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-case-insensitive-constants-is-no-longer-supported.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-case-insensitive-constants-is-no-longer-supported.html","name":"Declaration of case-insensitive constants is no longer supported","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-01T16:11:57+01:00","dateModified":"2025-04-11T19:46:35+02:00","description":"The define() function used to create case sensitive and case insensitive constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/declaration-of-case-insensitive-constants-is-no-longer-supported.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The define() function used to create case sensitive and case insensitive constants. This was the usage of the third parameter. 

Since PHP 8.0, only case sensitive constants may be declared, with `const` and with `define()`.

## Example

```php
<?php

// the third parameter is now ignored
define('CONSTANT_NAME', 'constant value', true);

?>
```

## Alternatives
+ Declare variations of the constant name.
