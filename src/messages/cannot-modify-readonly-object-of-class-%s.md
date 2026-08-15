# Cannot modify readonly object of class %s

## Description
It is possible to call the constructor on an existing object, after its creation. In the case of the Url objects, the underlying URL string is readonly, and the renewed call to the constructor is not possible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-object-of-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-object-of-class-%s.html","name":"Cannot modify readonly object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"It is possible to call the constructor on an existing object, after its creation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-object-of-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$uri = new Uri\WhatWg\Url('https://www.php.net/');
$uri->__construct('https://php.net/');

?>
```

## Literal Examples
+ Cannot modify readonly object of class Uri\WhatWg\Url

## Alternatives
+ Create a new Url object, instead of updating the existing one.

## Related error messages
+ [cannot-modify-readonly-property-%s::$%s](asdf)
