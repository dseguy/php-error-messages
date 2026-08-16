# Duplicate parameter name $%s for function %s%s%s()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-parameter-name-$%s-for-function-%s%s%s().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-parameter-name-$%s-for-function-%s%s%s().html","name":"Duplicate parameter name $%s for function %s%s%s()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 11:17:31 +0000","dateModified":"Fri, 05 Jun 2026 11:17:31 +0000","description":"It is not allowed to have several times the same parameter in a method, closure or function signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/duplicate-parameter-name-$%s-for-function-%s%s%s().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not allowed to have several times the same parameter in a method, closure or function signature. All the parameters must have different names.

This error appears only in PHP debug mode.

## Example

```php
<?php

function foo($a, $a, $a) {}

?>
```

## Literal Examples
+ Duplicate parameter name $a for function foo()

## Alternatives
+ Remove the parameters with duplicate names.
+ Rename the parameters with duplicate names.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()