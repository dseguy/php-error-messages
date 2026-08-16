# Returning by reference from a void function is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-by-reference-from-a-void-function-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-by-reference-from-a-void-function-is-deprecated.html","name":"Returning by reference from a void function is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-05-26T22:10:27+02:00","dateModified":"2025-03-24T19:12:23+01:00","description":"The return type ``void`` means that no value is returned, not even NULL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/returning-by-reference-from-a-void-function-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The return type `void` means that no value is returned, not even NULL. This means that the `&` option has no value here. Since PHP 8.1, this is reported as deprecated.

In the end, it has no value to collect the returned value of a void function, reference or not.

## Example

```php
<?php

function &foo() : void { }

?>
```

## Alternatives
+ Do not collect the returned valueo of a void function.
+ Remove the reference in the method definition.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[return_reference_on_void](return_reference_on_void)