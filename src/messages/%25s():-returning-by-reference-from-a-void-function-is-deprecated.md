# %s(): Returning by reference from a void function is deprecated

## Description
The void type means that the function is not returning anything. So, it doesn't matter if that nothing is returned by value or by reference.

If the returned value is, nonetheless, collected, it will be null in any case.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-returning-by-reference-from-a-void-function-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-returning-by-reference-from-a-void-function-is-deprecated.html","name":"%s(): Returning by reference from a void function is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:55:44 +0000","dateModified":"Fri, 10 Apr 2026 08:55:44 +0000","description":"The void type means that the function is not returning anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-returning-by-reference-from-a-void-function-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

    function &foo(): void { }

?>
```

## Literal Examples
+ foo(): Returning by reference from a void function is deprecated

## Alternatives
+ Remove the reference of the function.
+ Remove the type void, and return an actual value.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[return_reference_on_void.php](return_reference_on_void.php)