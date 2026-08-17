# Cannot use 'readonly' as %s modifier

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-readonly-as-ps-modifier.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-readonly-as-ps-modifier.html","name":"Cannot use 'readonly' as %s modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-21T14:02:06-05:00","dateModified":"2025-04-10T22:59:39+02:00","description":"``readonly`` is reserved for properties, and cannot be used with methods, constants, enumeration cases or static properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-readonly-as-ps-modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
