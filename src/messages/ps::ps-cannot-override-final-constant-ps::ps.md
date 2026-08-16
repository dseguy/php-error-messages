# %s::%s cannot override final constant %s::%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s-cannot-override-final-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s-cannot-override-final-constant-%s::%s.html","name":"%s::%s cannot override final constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-29T18:49:51+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The ``final`` keyword prevents any child class to define the same constant or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s::%s-cannot-override-final-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `final` keyword prevents any child class to define the same constant or method. The final const may overwrite a parent's definition, but this is the definitive value associated to the constant. Child class must define a distinct constant name.

## Example

```php
<?php

class X {
	final const A = 1;
}

class Y extends X {
	const A = 1;
}

?>
```

## Literal Examples
+ Y::A cannot override final constant X::Y

## Alternatives
+ Remove the final option in the parent class.
+ Rename the non-final constant in the child class.

## Related error messages
+ [cannot-override-final-%s::%s()-with-%s::%s()](cannot-override-final-%s::%s\(\)-with-%s::%s\(\).html)
