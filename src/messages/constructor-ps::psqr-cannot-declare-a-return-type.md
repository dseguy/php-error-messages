# Constructor %s::%s() cannot declare a return type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constructor-%s::%s()-cannot-declare-a-return-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constructor-%s::%s()-cannot-declare-a-return-type.html","name":"Constructor %s::%s() cannot declare a return type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-02T10:36:09+01:00","dateModified":"2025-10-19T12:33:32+02:00","description":"There can be no return type for a constructor method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/constructor-%s::%s()-cannot-declare-a-return-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
There can be no return type for a constructor method. It is called while creating a new instance of an object, but it doesn't return the object itself. This is the case even if $this is available in the method.

## Example

```php
<?php

class X {
	function __construct() : int {
	
	}
}

?>
```

## Literal Examples
+ Constructor X::__construct() cannot declare a return type

## Alternatives
+ Remove the return type of the method.

## Related error messages
+ [destructors-cannot-declare-a-return-type](destructors-cannot-declare-a-return-type.html)
+ [method-%s::__construct()-cannot-declare-a-return-type](method-%s::\_\_construct\(\)-cannot-declare-a-return-type.html)

In more recent PHP versions, this error message is now :ref:`method-%s::__construct()-cannot-declare-a-return-type`.