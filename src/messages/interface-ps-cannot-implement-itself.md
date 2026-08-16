# Interface %s cannot implement itself

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-%s-cannot-implement-itself.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-%s-cannot-implement-itself.html","name":"Interface %s cannot implement itself","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-09-14T22:12:55+02:00","dateModified":"2025-09-14T22:12:55+02:00","description":"An interface can extend another interface, to expand its list of methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/interface-%s-cannot-implement-itself.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
An interface can extend another interface, to expand its list of methods. It cannot extends itself, as it is useless.

## Example

```php
<?php

interface I extends I {}

?>
```

## Literal Examples
+ Interface I cannot implement itself

## Alternatives
+ Extend another interface.
+ Do not extend the current interface.

In more recent PHP versions, this error message is now :ref:`interface-"%s"-not-found`.