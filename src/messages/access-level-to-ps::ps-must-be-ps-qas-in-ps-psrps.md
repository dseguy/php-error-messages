# Access level to %s::%s must be %s (as in %s %s)%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-ps::ps-must-be-ps-qas-in-ps-psrps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-ps::ps-must-be-ps-qas-in-ps-psrps.html","name":"Access level to %s::%s must be %s (as in %s %s)%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-02T08:41:20+01:00","dateModified":"2026-08-06T15:27:15+02:00","description":"This error is emitted when a class constant is given more restrictive visibility than in the interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-ps::ps-must-be-ps-qas-in-ps-psrps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error is emitted when a class constant is given more restrictive visibility than in the interface. 

Anything in an interface is public, and so does any re-declaration in the host class.

## Example

```php
<?php

interface I {
    public const A   = 'public';
}

class X implements I {
    private const A   = 'public';
}

?>
```

## Literal Examples
+ Access level to x::A must be public (as in interface i)
+ Access level to Z::B must be protected (as in class Y)

## Alternatives
+ Remove the constant from the interface.
+ Remove the constant from the class.

## Related error messages
+ [set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s](set-access-level-of-%s::$%s-must-be-%s-\(as-in-class-%s\)%s.html)
+ [access-level-to-%s::$%s-must-be-%s-(as-in-class-%s)%s](access-level-to-%s::$%s-must-be-%s-\(as-in-class-%s\)%s.html)
