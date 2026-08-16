# Cannot use 'readonly' as %s modifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'readonly'-as-%s-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'readonly'-as-%s-modifier.html","name":"Cannot use 'readonly' as %s modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-'readonly'-as-%s-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`readonly` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties.

## Example

```php
<?php

class X {
    readonly function foo() {}
}

?>
```

## Literal Examples
+ Cannot use \'readonly\' as method modifier
+ Cannot use \'readonly\' as constant modifier
+ Cannot use \'readonly\' as constant modifier

## Alternatives
+ Remove the ``readonly`` option from the method signature.
