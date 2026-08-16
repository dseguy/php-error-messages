# %s" returned as member variable from __sleep() but does not exist

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s\"-returned-as-member-variable-from-__sleep()-but-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s\"-returned-as-member-variable-from-__sleep()-but-does-not-exist.html","name":"%s\" returned as member variable from __sleep() but does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The magic method ``__sleep`` must return a list of properties of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s\"-returned-as-member-variable-from-__sleep()-but-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The magic method `__sleep` must return a list of properties of the current class. Any private property defined in the parent are excluded. 

The returned array should be an array of strings, with the name of each property, without the initial `$` sign.

## Example

```php
<?php

class X {
    public $p = 1;
    function __sleep() {
        return ['p', 'q', []];
    }
}

serialize(new X);

?>
```

## Literal Examples
+ "q" returned as member variable from __sleep() but does not exist
+ "Array" returned as member variable from __sleep() but does not exist

## Alternatives
+ Remove all unknown properties.
+ Check the format of the property name, and remove the ``$`` sign.
+ Check the visibility of the properties: private properties from parents are excluded.

## Related error messages
+ [sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.](\_\_sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize..html)
+ [%s::__sleep()-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize](%s::\_\_sleep\(\)-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.html)
