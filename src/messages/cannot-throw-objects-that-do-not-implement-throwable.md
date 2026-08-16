# Cannot throw objects that do not implement Throwable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-throw-objects-that-do-not-implement-throwable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-throw-objects-that-do-not-implement-throwable.html","name":"Cannot throw objects that do not implement Throwable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"All classes that are thrown must implement the interfave Throwable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-throw-objects-that-do-not-implement-throwable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
All classes that are thrown must implement the interfave Throwable. It is possible to catch `Throwable` objects, but in fact, it is not possible to implement `Throwable` in a class: this is done by extending either `Exception` or `Error`, which, in turn, implements Throwable.

## Example

```php
<?php

class X {}

throw new X();

?>
```

## Alternatives
+ Make the class extends ``\Exception``.
+ Make the class extends ``\Error``.
+ Do not throw the class.
