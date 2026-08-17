# Undefined class constant '%s::%s'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-class-constant-ps::ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-class-constant-ps::ps.html","name":"Undefined class constant '%s::%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-06-09T22:35:35+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The requested class constant doesn't exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-class-constant-ps::ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The requested class constant doesn't exist.

In the case of an enumeration, this error message is also displayed for the cases: they do have the same syntax, so it is not possible to know if it is a constant or a case.

## Example

```php
<?php

class X {}

echo X::Y; 

enum E { case A;}

echo E::B;

?>
```

## Literal Examples
+ Undefined class constant 'x::Y'
+ Undefined class constant 'e::B'

## Alternatives
+ Find the actual name of the requested class constant.
+ Find the actual class of the requested class constant.
+ Define the class constant in the class, or its traits, interfaces or parents.

In more recent PHP versions, this error message is now :ref:`undefined-constant-%s::%s`.