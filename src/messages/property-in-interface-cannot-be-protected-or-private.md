# Property in interface cannot be protected or private

## Description
While PHP 8.4 supports properties in an interface, as long as they are defining hooks, it is not possible to use another visibility than `public`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-protected-or-private.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-protected-or-private.html","name":"Property in interface cannot be protected or private","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"While PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/property-in-interface-cannot-be-protected-or-private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface I {
    private $p { get; }
}

?>
```

## Alternatives
+ Make the property visible.
+ Move the property definition to an abstract class.
