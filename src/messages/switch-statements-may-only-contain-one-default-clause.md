# Switch statements may only contain one default clause

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/switch-statements-may-only-contain-one-default-clause.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/switch-statements-may-only-contain-one-default-clause.html","name":"Switch statements may only contain one default clause","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-08-27T16:24:13+02:00","dateModified":"2025-02-16T12:47:22-05:00","description":"The switch expression uses cases and a default entry","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/switch-statements-may-only-contain-one-default-clause.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The switch expression uses cases and a default entry. Cases are matched against the parameter variable, and when all of them fail, the default case (sic) is used. This also means that there can be only one defaut entry, as it will be used after all the cases. 

When several default cases are spotted, PHP stops compilation.

Note that there is no error message for multiple identical cases: in such situations, the first one is used.

## Example

```php
<?php

switch($a) {
    default:
    default: 
}

?>
```

## Alternatives
+ Remove all defaults but one.

## Related error messages
+ [match-expressions-may-only-contain-one-default-arm](match-expressions-may-only-contain-one-default-arm.html)
