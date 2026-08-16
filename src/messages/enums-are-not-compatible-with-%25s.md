# Enums are not compatible with %s

## Description
It is not possible to use an object as backing for the arrayobject class. Enums cases are objects, of the type of the enum. Hence, this is not possible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enums-are-not-compatible-with-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enums-are-not-compatible-with-%s.html","name":"Enums are not compatible with %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to use an object as backing for the arrayobject class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enums-are-not-compatible-with-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

enum Foo {
    case Bar;
}

new ArrayObject(Foo::Bar);

?>
```

## Alternatives
+ Put the value of the case in an array.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()