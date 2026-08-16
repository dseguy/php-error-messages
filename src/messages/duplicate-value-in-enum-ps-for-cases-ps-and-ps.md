# Duplicate value in enum %s for cases %s and %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-value-in-enum-%s-for-cases-%s-and-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-value-in-enum-%s-for-cases-%s-and-%s.html","name":"Duplicate value in enum %s for cases %s and %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-04-15T22:30:55+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"When an enumeration is backed, either string or int, the values used in the cases must all be distinct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-value-in-enum-%s-for-cases-%s-and-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When an enumeration is backed, either string or int, the values used in the cases must all be distinct. There cannot be any duplicate value. This problem is only reported at execution time, when one of the cases is used.

## Example

```php
<?php

enum E: int {
    case A = 1;
    case B = 1;
}

E::A;

?>
```

## Literal Examples
+ Duplicate value in enum E for cases A and B

## Alternatives
+ Make sure all the cases are distinct.

## Related error messages
+ [case-%s-of-non-backed-enum-%s-must-not-have-a-value](case-%s-of-non-backed-enum-%s-must-not-have-a-value.html)
