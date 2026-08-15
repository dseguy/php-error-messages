# must be a valid method name

## Description
The ReflectionMethod requires a method name to be instantiated. It is recommended to specify it with 2 arguments, the first being the class, or one of its objects, and the second being the method name. 

When only one argument is provided, the string must have the `class::method` format.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-method-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-method-name.html","name":"must be a valid method name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ReflectionMethod requires a method name to be instantiated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-method-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$method = new ReflectionMethod('c');

?>
```

## Alternatives
+ Use two arguments to call this method.
+ Use the correct format to reprsent a method in a string.

## Related error messages
+ [cannot-be-null-when-argument-#1-($objectormethod)-is-an-object](cannot-be-null-when-argument-#1-\($objectormethod\)-is-an-object.html)
