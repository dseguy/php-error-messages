# %s %s cannot implement interface %s, extend Exception or Error instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-cannot-implement-interface-%s,-extend-exception-or-error-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-cannot-implement-interface-%s,-extend-exception-or-error-instead.html","name":"%s %s cannot implement interface %s, extend Exception or Error instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"``Throwable`` is a PHP native and reserved interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s-%s-cannot-implement-interface-%s,-extend-exception-or-error-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Throwable` is a PHP native and reserved interface. It may be used for typing, such as with `catch` or parameter typing, but cannot be used directly. 

As the message suggest, the best is to extends an existing class that already implements `Throwable`, such as `Error`, `Exception` or any of their children classes.

Several interfaces are reserved by PHP: `UnitEnum`, `BackedEnum`, `Throwable`.

## Example

```php
<?php

class X implements Throwable {}

?>
```

## Literal Examples
+ Class X cannot implement interface Throwable, extend Exception or Error instead

## Alternatives
+ Extends ``Exception`` class.
+ Extends ``Error`` class.
+ Extends any of the ``Exception`` or ``Error`` classes.
