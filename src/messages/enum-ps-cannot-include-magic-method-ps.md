# Enum %s cannot include magic method %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-ps-cannot-include-magic-method-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-ps-cannot-include-magic-method-ps.html","name":"Enum %s cannot include magic method %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2024-12-03T21:55:43+01:00","dateModified":"2025-02-16T12:47:22-05:00","description":"Some magic methods are not allowed in an enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-ps-cannot-include-magic-method-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Some magic methods are not allowed in an enumeration. `__get`, `__set`, `__isset`, `__unset`, `__construct`, `__destruct`, `__sleep`, `__wakeup`, `__serialize`, `__unserialize`, `__toString`, `__set_state`, `__clone` and  `__debugInfo`.

This also means that some other magic methods are allowed : `__call`, `__callStatic` and `__invoke`.

## Example

```php
<?php

enum E {
    function __get($a) {}
}

?>
```

## Literal Examples
+ Enum e cannot include magic method __get
+ Enum e cannot include magic method __set
+ Enum e cannot include magic method __destruct

## Alternatives
+ Remove the magic method from the enumeration.
+ Turn the enumeration into a class.

## Related error messages
+ [EnumRFC](https://wiki.php.net/rfc/enumerations#magic_read-methods)
