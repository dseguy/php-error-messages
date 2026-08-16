# %s cannot implement %s - it is not an interface

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-cannot-implement-%s---it-is-not-an-interface.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-cannot-implement-%s---it-is-not-an-interface.html","name":"%s cannot implement %s - it is not an interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The ``implements`` keyword must use an interface, and cannot use anything else","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-cannot-implement-%s---it-is-not-an-interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `implements` keyword must use an interface, and cannot use anything else. In particular, it cannot be another class, enumeration or trait. All four structures CITE (class, Interface, Trait and Enumeration) use the same namespaces, and they cannot be told apart by reading the name only. 

Indeed, when the structure has no definition, PHP reports `interface-"E" not found`.

## Example

```php
<?php

enum E {}
class X implements E {}

?>
```

## Literal Examples
+ X cannot implement e - it is not an interface

## Alternatives
+ Make sure the implements structure is an interface, not a class, trait or enumeration.

## Related error messages
+ [interface-"%s"-not-found](interface-%s-not-found.html)
