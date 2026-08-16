# Undefined variable $%S

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-variable-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-variable-$%s.html","name":"Undefined variable $%S","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This error appears when a variable is used, aka read, while it was not defined before","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-variable-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This error appears when a variable is used, aka read, while it was not defined before. 

This might be a variable passed by argument to a method; a variable used with a short assignation operator or an argument of the PHP native function `compact`.

## Example

```php
<?php

$x += 1;

foo($a);

compact('undefined');

function foo($a) {}

?>
```

## Alternatives
+ Use another variable.
+ Check the variable before usage.
+ Give a default value to the variable before usage.
