# Enum case type %s does not match enum backing type %s

## Description
Enumeration may be backed with a scalar type, `int` or `string`. When doing so, each case must have a value of that type. And no type juggling happens, so `'1'` is not an integer, while `1` is not a string. The types must match perfectly one with another.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-case-type-%s-does-not-match-enum-backing-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-case-type-%s-does-not-match-enum-backing-type-%s.html","name":"Enum case type %s does not match enum backing type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"Enumeration may be backed with a scalar type, ``int`` or ``string``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-case-type-%s-does-not-match-enum-backing-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

enum E : string {
    case A = 1;
}

?>
```

## Alternatives
+ Change the type on the enumeration to fit the value.
+ Change the type on the value to fit the enumeration.
+ Remove types and values.

## Related error messages
+ [case-%s-of-non-backed-enum-%s-must-not-have-a-value](case-%s-of-non-backed-enum-%s-must-not-have-a-value.html)
