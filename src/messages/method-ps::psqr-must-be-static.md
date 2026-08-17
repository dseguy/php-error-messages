# Method %s::%s() must be static

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-ps::psqr-must-be-static.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-ps::psqr-must-be-static.html","name":"Method %s::%s() must be static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-16T14:26:16+01:00","dateModified":"2025-03-24T19:12:23+01:00","description":"The magic methods ``__set_state`` and ``__callStatic`` must be static","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-ps::psqr-must-be-static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The magic methods `__set_state` and `__callStatic` must be static. These are the only magic methods that must be static.

## Example

```php
<?php

class X {
    function __set_state($state) {}
}
?>
```

## Alternatives
+ Add ``static`` to the method signature, and remove all ``$this`` in its body.
+ Remove the methods.
