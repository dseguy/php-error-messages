# Can't inherit abstract function %s::%s() (previously declared abstract in %s)

## Description
In PHP 7.0 and 7.1, it was not possible to inherit an abstract class. In PHP 7.2, it was made possible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-inherit-abstract-function-%s::%s()-(previously-declared-abstract-in-%s).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-inherit-abstract-function-%s::%s()-(previously-declared-abstract-in-%s).html","name":"Can't inherit abstract function %s::%s() (previously declared abstract in %s)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"In PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/can't-inherit-abstract-function-%s::%s()-(previously-declared-abstract-in-%s).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

abstract class A           { abstract function bar(stdClass $x);  }
abstract class B extends A { abstract function bar($x): stdClass; }

//   Fatal error: Can't inherit abstract function A::bar()
?>
```

## Literal Examples
+ Can\'t inherit abstract function B::bar() (previously declared abstract in A)

## Alternatives
+ Upgrade to PHP 7.2 or later.
+ Remove the ``abstract`` keyword.
+ Remove the method.
