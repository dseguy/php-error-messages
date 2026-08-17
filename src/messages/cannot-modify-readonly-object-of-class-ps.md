# Cannot modify readonly object of class %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-object-of-class-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-object-of-class-ps.html","name":"Cannot modify readonly object of class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-10-25T11:00:16+02:00","dateModified":"2025-10-25T11:00:16+02:00","description":"It is possible to call the constructor on an existing object, after its creation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-modify-readonly-object-of-class-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
It is possible to call the constructor on an existing object, after its creation. In the case of the Url objects, the underlying URL string is readonly, and the renewed call to the constructor is not possible.

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
+ [cannot-modify-readonly-property-%s::$%s](cannot-modify-readonly-property-%s::$%s.html)
