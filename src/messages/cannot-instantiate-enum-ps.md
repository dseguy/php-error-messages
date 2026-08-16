# Cannot instantiate enum %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-enum-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-enum-%s.html","name":"Cannot instantiate enum %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Enumeration cannot be instantiated directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-instantiate-enum-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Enumeration cannot be instantiated directly. 

An enumeration object is created automatically when reading one of its case.

## Example

```php
<?php

enum E {
	case A;
}

//Cannot instantiate enum E
new E();

// E
print get_class(E::A);

?>
```

## Literal Examples
+ Cannot instantiate enum e

## Alternatives
+ Use one of the enumeration cases.

## Related error messages
+ [cannot-instantiate-trait-%s](cannot-instantiate-trait-%s.html)
+ [cannot-instantiate-interface-%s](cannot-instantiate-interface-%s.html)
