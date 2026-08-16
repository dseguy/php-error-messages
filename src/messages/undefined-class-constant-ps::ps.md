# Undefined class constant '%s::%s'

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-class-constant-'%s::%s'.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-class-constant-'%s::%s'.html","name":"Undefined class constant '%s::%s'","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"The requested class constant doesn't exist","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-class-constant-'%s::%s'.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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