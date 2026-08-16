# Case can only be used in enums

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-can-only-be-used-in-enums.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-can-only-be-used-in-enums.html","name":"Case can only be used in enums","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-15T22:30:55+02:00","dateModified":"2025-04-15T22:30:55+02:00","description":"``case`` is a keyword which is reserved for enumerations ``enum``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-can-only-be-used-in-enums.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
