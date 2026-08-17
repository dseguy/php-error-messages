# %s %s cannot implement previously implemented interface %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-ps-cannot-implement-previously-implemented-interface-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-ps-cannot-implement-previously-implemented-interface-ps.html","name":"%s %s cannot implement previously implemented interface %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-02T21:36:53+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/ps-ps-cannot-implement-previously-implemented-interface-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error reports that an interface has already been implemented by a parent, and, as such, should not be implemented again. 

For enumerations, it applies to `BackEnum` and `UnitEnum`, as enumerations don't have parents.

For interfaces and classes, it applies to repetitions of interfaces in the implements list. 

It doesn't apply to duplicate implements between a parent and a child class or interface.

It doesn't apply to trait, that have no relationship with interfaces.

## Example

```php
<?php

enum X implements UnitEnum {}

interface J extends I, I {}

class X implements I {}

// This is OK
// It is also duplicate and useless, but valid.
class Y extends X implements I {}

?>
```

## Literal Examples
+ Enum x cannot implement previously implemented interface UnitEnum

## Alternatives
+ Remove duplicate interfaces from the ``implements`` keyword on classes.
+ Remove duplicate interfaces from the ``extends`` keyword on interfaces.
+ Remove ``BackEnum`` and ``UnitEnum`` from the ``implements`` keyword on an enumeration.

## Related error messages
+ [non-enum-class-%s-cannot-implement-interface-%s](non-enum-class-%s-cannot-implement-interface-%s.html)
