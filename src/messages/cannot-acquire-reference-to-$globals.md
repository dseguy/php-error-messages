# Cannot acquire reference to $GLOBALS

## Description
It is not possible to create a reference to a the superglobal `$GLOBALS`. The property is readonly and cannot be changed. On the other hand, references are never readonly, and provide read and write access to the data. PHP has no way to check that the reference is readonly. Hence, references on readonly properties are not allowed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-acquire-reference-to-$globals.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-acquire-reference-to-$globals.html","name":"Cannot acquire reference to $GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is not possible to create a reference to a the superglobal ``$GLOBALS``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-acquire-reference-to-$globals.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

// Cannot acquire reference to $GLOBALS
$a = &$GLOBALS;

?>
```

## Alternatives
+ Remove the readonly option on the property.
+ Remove the reference to the property.

## Related error messages
+ [%s():-argument-#%d%s%s%s-cannot-be-passed-by-reference](%s\(\):-argument-#%d%s%s%s-cannot-be-passed-by-reference.html)
