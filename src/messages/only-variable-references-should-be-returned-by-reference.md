# Only variable references should be returned by reference

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variable-references-should-be-returned-by-reference.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variable-references-should-be-returned-by-reference.html","name":"Only variable references should be returned by reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-11T20:16:59+01:00","dateModified":"2025-10-19T12:33:32+02:00","description":"When a function returns a reference, it must return a variable, a property or an array's item","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/only-variable-references-should-be-returned-by-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When a function returns a reference, it must return a variable, a property or an array's item. It cannot return a literal value, a constant or an expression.

## Example

```php
<?php

function &foo() {
    return 1;
    
    return B;
}

?>
```

## Alternatives
+ Put the literal in a variable, and return the variable.
+ Remove the reference in the method signature.

## Related error messages
+ [%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference](%s\(\):-argument-#%d%s%s%s-cannot-be-passed-by-reference.html)
+ [%s():-argument-#%d%s%s%s-could-not-be-passed-by-reference](%s\(\):-argument-#%d%s%s%s-could-not-be-passed-by-reference.html)
