# The __wakeup() serialization magic method has been deprecated.

## Description
Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland. Initially with the __sleep() and __wakeup() magic methods, then with the Serializable interface and finally with __serialize() and __unserialize(). 

In the end, the `__serialize` and `__unserialize` methods must be used, instead of `__sleep` and `__wakeup`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-__wakeup()-serialization-magic-method-has-been-deprecated..html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-__wakeup()-serialization-magic-method-has-been-deprecated..html","name":"The __wakeup() serialization magic method has been deprecated.","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"Class serialization in PHP has had multiple mechanism introduced to control its behaviour by userland","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-__wakeup()-serialization-magic-method-has-been-deprecated..html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X {
    function __sleep() {}
}

?>
```

## Alternatives
+ Rename the method to ``__unserialize``.

## Related error messages
+ [the-__sleep()-serialization-magic-method-has-been-deprecated.](asdf)

## Related error messages
+ [PHP RFC: Deprecations for PHP 8.5](https://wiki.php.net/rfc/deprecations_php_8_5)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()