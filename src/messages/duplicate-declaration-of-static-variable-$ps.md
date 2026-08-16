# Duplicate declaration of static variable $%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-declaration-of-static-variable-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-declaration-of-static-variable-$%s.html","name":"Duplicate declaration of static variable $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-10-01T22:31:39+02:00","dateModified":"2025-02-23T09:24:54-05:00","description":"It is not allowed anymore to declare twice a static variable in a method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-declaration-of-static-variable-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not allowed anymore to declare twice a static variable in a method. This is spotted at compile time.

## Example

```php
<?php

function foo() {
	static $a;
	
	++$a;
	
	static $a;
}

?>
```

## Literal Examples
+ Duplicate declaration of static variable $a

## Alternatives
+ Remove all the static declarations, but one: keep the earliest one.
