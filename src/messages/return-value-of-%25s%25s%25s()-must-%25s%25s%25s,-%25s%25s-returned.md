# Return value of %s%s%s() must %s%s%s, %s%s returned

## Description
The type of the returned value must match the type of the method signature. 

With strict_types, PHP refuses anything that is not compatible with the returned type: returning '123' (123 as a string), or 123.00 (123 as float) is forbidden. 

Without strict_types, PHP tries to convert the value to int, and only produces an error when it cannot.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned.html","name":"Return value of %s%s%s() must %s%s%s, %s%s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The type of the returned value must match the type of the method signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function foo() : int {
	return 'abc';
}
?>
```

## Literal Examples
+ Return value of foo() must be int, string returned

## Alternatives
+ Use a cast to force the type to the desired returntype.
+ Check the type before returning it.
+ Remove the return type.
+ Remove strict_types.

## Related error messages
+ [a-function-with-return-type-must-return-a-value](a-function-with-return-type-must-return-a-value.html)
