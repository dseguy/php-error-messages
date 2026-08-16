# Case can only be used in enums

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-can-only-be-used-in-enums.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-can-only-be-used-in-enums.html","name":"Case can only be used in enums","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``case`` is a keyword which is reserved for enumerations ``enum``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-can-only-be-used-in-enums.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`case` is a keyword which is reserved for enumerations `enum`. It cannot be used in other structures, such as traits, interfaces or classes.

## Example

```php
<?php

class X {
    case A = 1;
}

?>
```

## Alternatives
+ Make the class an enumeration.
+ Remove the case from the class.
