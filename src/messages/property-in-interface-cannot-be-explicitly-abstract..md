# Property in interface cannot be explicitly abstract.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-explicitly-abstract..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-explicitly-abstract..html","name":"Property in interface cannot be explicitly abstract.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-14T10:02:54+02:00","dateModified":"2026-03-31T11:06:56+02:00","description":"While PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-explicitly-abstract..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
While PHP 8.4 supports properties in an interface, as long as they are defining hooks, it is not possible to use explicitly the option `abstract`.

## Example

```php
<?php

interface I {
    abstract $p { get; }
}

?>
```

## Alternatives
+ Remove the option ``abstract``. May be use ``public`` instead.
+ Move the property definition to an abstract class.
