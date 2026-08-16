# The __sleep() serialization magic method has been deprecated.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-__sleep()-serialization-magic-method-has-been-deprecated..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-__sleep()-serialization-magic-method-has-been-deprecated..html","name":"The __sleep() serialization magic method has been deprecated.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-11-18T06:36:11+01:00","dateModified":"2025-11-18T06:36:11+01:00","description":"Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-__sleep()-serialization-magic-method-has-been-deprecated..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland. Initially with the __sleep() and __wakeup() magic methods, then with the Serializable interface and finally with __serialize() and __unserialize(). 

In the end, the `__serialize` and `__unserialize` methods must be used, instead of `__sleep` and `__wakeup`.

## Example

```php
<?php

class X {
    function __sleep() {}
}

?>
```

## Alternatives
+ Rename the method to ``__serialize``.

## Related error messages
+ [the-__wakeup()-serialization-magic-method-has-been-deprecated.](the-\_\_wakeup\(\)-serialization-magic-method-has-been-deprecated..html)

## Related error messages
+ [PHP RFC: Deprecations for PHP 8.5](https://wiki.php.net/rfc/deprecations_php_8_5)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()