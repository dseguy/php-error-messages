# Non-enum class %s cannot implement interface %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-enum-class-ps-cannot-implement-interface-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-enum-class-ps-cannot-implement-interface-ps.html","name":"Non-enum class %s cannot implement interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-02T21:36:53+01:00","dateModified":"2026-03-31T11:21:01+02:00","description":"``UnitEnum`` is an PHP native and reserved interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-enum-class-ps-cannot-implement-interface-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`UnitEnum` is an PHP native and reserved interface. It is only used with enumerations. It is also handled by PHP itself, which adds it to enumerations: there is no need to add it explictly. This applies to `BackedEnum` and `UnitEnum`, as of PHP 8.4.

## Example

```php
<?php

    class X implements YnitEnum {}

?>
```

## Literal Examples
+ Non-enum class x cannot implement interface UnitEnum
+ Non-enum class x cannot implement interface BackEnum

## Alternatives
+ Turn the class into an enumeration.
+ Remove the UnitEnum implementation.

## Related error messages
+ [%s-%s-cannot-implement-previously-implemented-interface-%s](%s-%s-cannot-implement-previously-implemented-interface-%s.html)
