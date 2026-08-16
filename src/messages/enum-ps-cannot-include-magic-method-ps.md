# Enum %s cannot include magic method %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-%s-cannot-include-magic-method-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-%s-cannot-include-magic-method-%s.html","name":"Enum %s cannot include magic method %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Some magic methods are not allowed in an enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enum-%s-cannot-include-magic-method-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
