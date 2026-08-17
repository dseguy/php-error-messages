# Access type for interface constant %s::%s must be public

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-type-for-interface-constant-ps::ps-must-be-public.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-type-for-interface-constant-ps::ps-must-be-public.html","name":"Access type for interface constant %s::%s must be public","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-12T23:10:02+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"An method or a constant, that are defined in an interface, must appear as ``public`` in all the implementing classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-type-for-interface-constant-ps::ps-must-be-public.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An method or a constant, that are defined in an interface, must appear as `public` in all the implementing classes. They cannot be made `protected` or `private`, as they would be no accessible.

## Example

```php
<?php

interface I {
    private const C = 1;
}

?>
```

## Literal Examples
+ Access type for interface constant I::C must be public

## Alternatives
+ Set the visibility to public in the interface.
+ Remove the visibility in the interface.
+ Remove the constant in the interface.

## Related error messages
+ [access-type-for-interface-method-%s::%s()-must-be-public](access-type-for-interface-method-%s::%s\(\)-must-be-public.html)
