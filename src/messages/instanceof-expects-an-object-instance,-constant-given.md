# instanceof expects an object instance, constant given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instanceof-expects-an-object-instance,-constant-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instanceof-expects-an-object-instance,-constant-given.html","name":"instanceof expects an object instance, constant given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Until PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instanceof-expects-an-object-instance,-constant-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Until PHP 7.3, PHP required an object as the left operand of `instanceof`. In recent versions, PHP does not emit an error anymore, and returns null.

Although the function reports a constant problem, the error is reported with literal values, and not with constants.

Constants were allowed to receive objects in PHP 8.1.

## Example

```php
<?php

null instanceof A::class;

?>
```

## Alternatives
+ Upgrade to PHP 7.3 or more recent.
+ Chech the left operand with ``is_object()``, before using instanceof.
