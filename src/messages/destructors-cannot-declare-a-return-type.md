# Destructors cannot declare a return type

## Description
There can be no return type for a destructor method. It is called while destroying an existing instance of an object, and the object won't be available at the end.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/destructors-cannot-declare-a-return-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/destructors-cannot-declare-a-return-type.html","name":"Destructors cannot declare a return type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"There can be no return type for a destructor method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/destructors-cannot-declare-a-return-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ [constructor-%s::%s()-cannot-declare-a-return-type](asdf)
+ [method-%s::%s()-cannot-declare-a-return-type](asdf)
+ [method-%s::__construct()-cannot-declare-a-return-type](asdf)
