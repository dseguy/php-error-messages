# Cannot assign %s to class constant %s::%s of type

## Description
Since PHP 8.3, constants may have a type specification. In this case, the default value must match the requested type. 

In particular, there is not type juggling, so type has to match exactly.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-%s-to-class-constant-%s::%s-of-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-%s-to-class-constant-%s::%s-of-type.html","name":"Cannot assign %s to class constant %s::%s of type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-assign-%s-to-class-constant-%s::%s-of-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    const int A = '3';
}
?>
```

## Literal Examples
+ Cannot assign string to class constant x::A of type int

## Alternatives
+ Drop the default value.
+ Adapt the default value to the requested type.
+ Drop the type of the constant.
