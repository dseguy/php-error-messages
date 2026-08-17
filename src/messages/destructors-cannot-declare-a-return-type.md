# Destructors cannot declare a return type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/destructors-cannot-declare-a-return-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/destructors-cannot-declare-a-return-type.html","name":"Destructors cannot declare a return type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-03-15T22:09:22+01:00","dateModified":"2026-08-17T16:24:13+02:00","description":"There can be no return type for a destructor method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/destructors-cannot-declare-a-return-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There can be no return type for a destructor method. It is called while destroying an existing instance of an object, and the object won't be available at the end.

## Example

```php
<?php

class X {
	function __destruct() : int {}
}

?>
```

## Alternatives
+ Remove the return type of the method.

## Related error messages
+ [constructor-%s::%s()-cannot-declare-a-return-type](constructor-%s::%s\(\)-cannot-declare-a-return-type.html)
+ [method-%s::%s()-cannot-declare-a-return-type](method-%s::%s\(\)-cannot-declare-a-return-type.html)
+ [method-%s::__construct()-cannot-declare-a-return-type](method-%s::\_\_construct\(\)-cannot-declare-a-return-type.html)
+ [making-a-destructor-a-generator-is-deprecated](making-a-destructor-a-generator-is-deprecated.html)
+ [returning-a-value-from-a-destructor-is-deprecated](returning-a-value-from-a-destructor-is-deprecated.html)
