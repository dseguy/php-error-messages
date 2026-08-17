# Duplicate named parameter $%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-named-parameter-$ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-named-parameter-$ps.html","name":"Duplicate named parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-11-12T21:08:01+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Parameter shall only be passed once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-named-parameter-$ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Parameter shall only be passed once. For named parameters, this means that the same name shall only be used once when calling the method. 

This problem is never raised with positional arguments, which are automatically indexed. 

There is a distinct error message when this happens to in method calls.

## Example

```php
<?php

function foo($b, $b) {}

#[MyAttribute(a: 'A', a: 'A')]
class Test {}

?>
```

## Literal Examples
+ Duplicate named parameter $a
+ Duplicate named parameter $b

## Alternatives
+ Remove the names of the parameters.
+ Change the name of all the duplicate named parameters, but one.
+ Remove the duplicates named parameters, but one.

## Related error messages
+ [named-parameter-$%s-overwrites-previous-argument](named-parameter-$%s-overwrites-previous-argument.html)
