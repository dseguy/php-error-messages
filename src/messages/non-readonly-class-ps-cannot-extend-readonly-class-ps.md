# Non-readonly class %s cannot extend readonly class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-readonly-class-ps-cannot-extend-readonly-class-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-readonly-class-ps-cannot-extend-readonly-class-ps.html","name":"Non-readonly class %s cannot extend readonly class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-13T20:51:12+02:00","dateModified":"2026-08-04T21:25:09+02:00","description":"A readonly class cannot extends a non-readonly class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/non-readonly-class-ps-cannot-extend-readonly-class-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A readonly class cannot extends a non-readonly class; a non-readonly class cannot extends a readonly class. Both classes must be readonly or non-readonly to be able to extends one another. This is due to readonly being applied to all available properties, which is ambiguous with class hierarchies.

## Example

```php
<?php

readonly class Foo
{
}

class Bar extends Foo
{
}

?>
```

## Literal Examples
+ Non-readonly class Foo cannot extend readonly class Bar

## Alternatives
+ Make both classes readonly.
+ Make both classes non-readonly.
+ Make both classes non-readonly and apply readonly per properties.

## Related error messages
+ [readonly-class-%s-cannot-extend-non-readonly-class-%s](readonly-class-%s-cannot-extend-non-readonly-class-%s.html)
+ [%s-class-%s-cannot-extend-%s-class-%s](%s-class-%s-cannot-extend-%s-class-%s.html)
