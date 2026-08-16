# A class constant must not be called class. it is reserved for class name fetching

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching.html","name":"A class constant must not be called class. it is reserved for class name fetching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-05-01T21:47:25+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"Class constants can use a lot of names, but not the name 'class'","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/a-class-constant-must-not-be-called-class.-it-is-reserved-for-class-name-fetching.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Class constants can use a lot of names, but not the name 'class'. This is used by default to fetch the full name of the class, and there is no need to defined it. 

Hence, it is not possible to define a class constant called 'class', case non-withstanding, as it conflict with the default constant.

## Example

```php
<?php

class X {
	const CLASS = 1;
	// the problem is case insensitive. class, Class, CLass... are all forbidden
}

?>
```

## Alternatives
+ Use another name for that constant.

## Related error messages
+ [cannot-redefine-class-constant-%s::%s](cannot-redefine-class-constant-%s::%s.html)
