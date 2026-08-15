# __autoload() is no longer supported, use spl_autoload_register() instead

## Description
The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet.

This approach was useful, but limited management operation: in particular, it was not possible to add more functions, or remove some of them. So, it was replaced with the `spl_autoload_register()` function, which add a closure to a list of autoloaders.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/autoload()-is-no-longer-supported,-use-spl_autoload_register()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/autoload()-is-no-longer-supported,-use-spl_autoload_register()-instead.html","name":"__autoload() is no longer supported, use spl_autoload_register() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/autoload()-is-no-longer-supported,-use-spl_autoload_register()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

function __autoload() {}

?>
```

## Alternatives
+ Give another name to the ``__autoload`` function, and register it as autoloader with spl_autoload_register().
+ Remove the ``__autoload`` function.

In previous PHP versions, this error message used to be :ref:`autoload()-is-deprecated,-use-spl_autoload_register()-instead`.