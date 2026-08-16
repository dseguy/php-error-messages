# Property in interface cannot be final

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-final.html","name":"Property in interface cannot be final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"While PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
While PHP 8.4 supports properties in an interface, as long as they are defining hooks, it is not possible to use the `final` option: in fact, the property hook does not have a body, so there is no code to finalize.

## Example

```php
<?php

interface I {
    final $p { get; }
}

?>
```

## Alternatives
+ Remove the ``final`` option.
+ Move the property definition to an abstract class.
