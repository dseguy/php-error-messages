# Access type for interface method %s::%s() must be public

## Description
An method, that is defined in an interface, must appear as `public`. They cannot be made `protected` or `private`, as they would be no accessible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-type-for-interface-method-%s::%s()-must-be-public.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-type-for-interface-method-%s::%s()-must-be-public.html","name":"Access type for interface method %s::%s() must be public","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"An method, that is defined in an interface, must appear as ``public``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-type-for-interface-method-%s::%s()-must-be-public.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

interface I {
    private function foo();
    
    protected const C = 1;
}

?>
```

## Literal Examples
+ Access type for interface method I::foo() must be public

## Alternatives
+ Set the visibility to public in the interface.
+ Remove the visibility in the interface.

## Related error messages
+ [access-type-for-interface-constant-%s::%s-must-be-public](access-type-for-interface-constant-%s::%s-must-be-public.html)
