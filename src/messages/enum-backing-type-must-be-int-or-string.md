# Enum backing type must be int or string

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-backing-type-must-be-int-or-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-backing-type-must-be-int-or-string.html","name":"Enum backing type must be int or string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Backed enumeration have a name and a value for each case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-backing-type-must-be-int-or-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Backed enumeration have a name and a value for each case. The type of that value is specified next to the enumeration name, and can only by `string` or `int`. All other values are forbidden.

## Example

```php
<?php

enum E: A {
    case B;
}

?>
```

## Literal Examples
+ Enum backing type must be int or string, A given

## Alternatives
+ Remove the type on the enumeration and its cases.
+ Use one of the valid types with the enumeration.

## Related error messages
+ [case-%s-of-non-backed-enum-%s-must-not-have-a-value](case-%s-of-non-backed-enum-%s-must-not-have-a-value.html)
