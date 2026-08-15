# Access level to %s::%s must be %s (as in %s %s)%s

## Description
This error is emitted when a class constant is given more restrictive visibility than in the interface. 

Anything in an interface is public, and so does any re-declaration in the host class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s.html","name":"Access level to %s::%s must be %s (as in %s %s)%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:00:09 +0000","dateModified":"Wed, 05 Aug 2026 14:00:09 +0000","description":"This error is emitted when a class constant is given more restrictive visibility than in the interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
