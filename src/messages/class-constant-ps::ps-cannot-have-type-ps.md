# Class constant %s::%s cannot have type %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-constant-%s::%s-cannot-have-type-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-constant-%s::%s-cannot-have-type-%s.html","name":"Class constant %s::%s cannot have type %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-07-30T22:30:52+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Some native PHP types are not allowed with a class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/class-constant-%s::%s-cannot-have-type-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Some native PHP types are not allowed with a class constant. This is the case of `void`, `never` and `callable`. Any mention of them, alone or in a compsed type generates this error.

## Example

```php
<?php

class X {
	const callable|int A = 1;
}

?>
```

## Literal Examples
+ Class constant X::A cannot have type callable|int

## Alternatives
+ Remove any illegal type from the definition of the constant.
+ Remove all types from the definition of the constant.

## Related error messages
+ [property-%s::$%s-cannot-have-type-%s](property-%s::$%s-cannot-have-type-%s.html)
