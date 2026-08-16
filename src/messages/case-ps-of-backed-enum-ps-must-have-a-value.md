# Case %s of backed enum %s must have a value

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s-of-backed-enum-%s-must-have-a-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s-of-backed-enum-%s-must-have-a-value.html","name":"Case %s of backed enum %s must have a value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In a backed enumeration, all the cases must have a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/case-%s-of-backed-enum-%s-must-have-a-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
In a backed enumeration, all the cases must have a value. There are no default values for cases, not automatic assignation. This applies to both `int` and `string` enumerations.

## Example

```php
<?php

enum E: int {
    case A = 1;
    case B;
}

?>
```

## Literal Examples
+ Case B of backed enum E must have a value

## Alternatives
+ Add all the missing values to the cases.
+ Remove the type of the enum.
