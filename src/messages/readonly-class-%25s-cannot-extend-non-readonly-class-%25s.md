# Readonly class %s cannot extend non-readonly class %s

## Description
A readonly class cannot extends a non-readonly class; a non-readonly class cannot extends a readonly class. Both classes must be readonly or non-readonly to be able to extends one another. This is due to readonly being applied to all available properties, which is ambiguous with class hierarchies.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-%s-cannot-extend-non-readonly-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-%s-cannot-extend-non-readonly-class-%s.html","name":"Readonly class %s cannot extend non-readonly class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 19:11:55 +0000","dateModified":"Tue, 04 Aug 2026 19:11:55 +0000","description":"A readonly class cannot extends a non-readonly class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/readonly-class-%s-cannot-extend-non-readonly-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Foo
{
}

readonly class Bar extends Foo
{
}

?>
```

## Literal Examples
+ Readonly class Foo cannot extend non-readonly class Bar

## Alternatives
+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per properties.

## Related error messages
+ [non-readonly-class-%s-cannot-extend-readonly-class-%s](non-readonly-class-%s-cannot-extend-readonly-class-%s.html)
+ [%s-class-%s-cannot-extend-%s-class-%s](%s-class-%s-cannot-extend-%s-class-%s.html)
