# Method %s::__construct() cannot declare a return type

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::__construct()-cannot-declare-a-return-type.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::__construct()-cannot-declare-a-return-type.html","name":"Method %s::__construct() cannot declare a return type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"There can be no return type for a constructor method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/method-%s::__construct()-cannot-declare-a-return-type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
+ Method X::__construct() cannot declare a return type

## Alternatives
+ Remove the return type of the method.

## Related error messages
+ [destructors-cannot-declare-a-return-type](destructors-cannot-declare-a-return-type.html)
+ [constructor-%s::%s()-cannot-declare-a-return-type](constructor-%s::%s\(\)-cannot-declare-a-return-type.html)

In previous PHP versions, this error message used to be :ref:`constructor-%s::%s()-cannot-declare-a-return-type`.