# __autoload() is deprecated, use spl_autoload_register() instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/autoload()-is-deprecated,-use-spl_autoload_register()-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/autoload()-is-deprecated,-use-spl_autoload_register()-instead.html","name":"__autoload() is deprecated, use spl_autoload_register() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-06T12:15:58+01:00","dateModified":"2025-09-14T18:09:14+02:00","description":"The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/autoload()-is-deprecated,-use-spl_autoload_register()-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The initial autoloader was a custom function, that was called whenever a class, interface or trait had to be loaded, but could not be found by PHP yet.

This approach was useful, but limited management operation: in particular, it was not possible to add more functions, or remove some of them. So, it was replaced with the `spl_autoload_register()` function, which add a closure to a list of autoloaders.

## Example

```php
<?php

function __autoload() {}

?>
```

## Alternatives
+ Give another name to the ``__autoload`` function, and register it as autoloader with spl_autoload_register().
+ Remove the ``__autoload`` function.

In more recent PHP versions, this error message is now :ref:`autoload()-is-no-longer-supported,-use-spl_autoload_register()-instead`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[autoload](autoload)