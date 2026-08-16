# Cannot append to $GLOBALS

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-append-to-$globals.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-append-to-$globals.html","name":"Cannot append to $GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-30T10:03:45+02:00","dateModified":"2026-08-06T15:27:15+02:00","description":"$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-append-to-$globals.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name. Appending with the empty-bracket operator, which would normally pick the next integer key, has no matching global variable to bind to, so PHP 8.1 turned this previously-meaningless operation into a compile-time error instead of silently creating a global variable literally named "0".

## Example

```php
<?php

$GLOBALS[] = 'value';

?>
```

## Alternatives
+ Assign to an explicit, named key instead: $GLOBALS['name'] = 'value';

## Related error messages
+ [cannot-use-[]-for-unsetting](cannot-use-\[\]-for-unsetting.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[GLOBALSAppend](GLOBALSAppend)