# Cannot use lexical variable %s as a parameter name

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-lexical-variable-%s-as-a-parameter-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-lexical-variable-%s-as-a-parameter-name.html","name":"Cannot use lexical variable %s as a parameter name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to use a parameter and import a variable of the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-lexical-variable-%s-as-a-parameter-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is not possible to use a parameter and import a variable of the same name. This would result in a naming conflict, and a data overwrite. All names should be distinct.

## Example

```php
<?php

function ($a) use ($a) {}; 

?>
```

## Literal Examples
+ Cannot use lexical variable $x as a parameter name

## Alternatives
+ Rename the variable in the use clause.
+ Rename the parameter in the function clause.
