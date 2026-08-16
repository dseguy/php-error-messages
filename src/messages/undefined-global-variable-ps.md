# Undefined global variable %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-global-variable-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-global-variable-%s.html","name":"Undefined global variable %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-07-04T15:29:49+02:00","dateModified":"2025-07-04T15:29:49+02:00","description":"$GLOBALS is a superglobal that stores all the defined global variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/undefined-global-variable-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
$GLOBALS is a superglobal that stores all the defined global variables. It yields this warning when trying to reach a global via one of its index.

## Example

```php
<?php

function foo() {
    echo $GLOBALS['a']; 
}

foo();

?>
```

## Literal Examples
+ Undefined global variable $a
+ Undefined global variable $GLOBALS

## Alternatives
+ Create the global with the ``global`` keyword before accessing it.
