# Cannot access %s constant %s::%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-%s-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-%s-constant-%s::%s.html","name":"Cannot access %s constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Class constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-access-%s-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Class constants have visibility, which restrict access to the defining class (`private`), or the class and its children (`protected`).

## Example

```php
<?php

class X {
    private const A = 1;
}

echo X::A;

?>
```

## Literal Examples
+ Cannot access private constant X::A

## Alternatives
+ Relax the visibility constraint to ``protected`` or ``public`` to make the constant available to the calling context.
+ Create a method to access the value of the constant.
+ Extends the class and change the visibility level of the constant.

## Related error messages
+ [cannot-access-%s-property-%s::$%s](cannot-access-%s-property-%s::$%s.html)

In previous PHP versions, this error message used to be :ref:`cannot-access-%s-const-%s::%s`.