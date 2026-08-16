# Could not check compatibility between %s and %s, because class %s is not available

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available.html","name":"Could not check compatibility between %s and %s, because class %s is not available","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of ``V``, compared to ``W``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/could-not-check-compatibility-between-%s-and-%s,-because-class-%s-is-not-available.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error message signals that PHP could not find all the needed classes and interfaces to reach a conclusion about the compatibility of `V`, compared to `W`. 

PHP checks all the classes and interfaces whose definitions are already known, and, eventually, calls autoload to get the missing classes. When all avenues are exhausted, PHP yields this error. 

In fact, if checking compatibility fails, the code will not run later anyway.

## Example

```php
<?php

class V {
    function foo() : X { }
}

class W extends W {
    function foo() : Y { }
}

?>
```

## Literal Examples
+ Could not check compatibility between V::foo() and W::foo(), because class X is not available

## Alternatives
+ Use existing classes or interfaces as type.
+ Fix typos in type names.
+ Add any missing class or interface.
