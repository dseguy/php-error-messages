# Using spl_autoload_call() as a callback for spl_autoload_unregister() is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-spl_autoload_callqr-as-a-callback-for-spl_autoload_unregisterqr-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-spl_autoload_callqr-as-a-callback-for-spl_autoload_unregisterqr-is-deprecated,.html","name":"Using spl_autoload_call() as a callback for spl_autoload_unregister() is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:44:25+00:00","dateModified":"2026-09-20T20:44:25+00:00","description":"``spl_autoload_unregister()`` normally removes one specific autoload function that was previously registered with ``spl_autoload_register()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-spl_autoload_callqr-as-a-callback-for-spl_autoload_unregisterqr-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`spl_autoload_unregister()` normally removes one specific autoload function that was previously registered with `spl_autoload_register()`. As an undocumented side effect, passing the engine's own `spl_autoload_call()` function as the callback acted as a magic value that unregistered *all* autoloaders at once, regardless of how many were registered or by which part of the code.

This implicit, all-or-nothing shortcut is deprecated as of PHP 8.5 because it is easy to trigger by accident (any code that unregisters its own autoloader using the wrong callable name) and because it silently affects autoloaders registered by unrelated libraries. Use `spl_autoload_functions()` to list every registered autoloader and unregister them individually instead.

## Example

```php
<?php

spl_autoload_register(function ($class) {
    // custom autoloading logic
});

// Passing the internal spl_autoload_call() as a callback is a
// magic value that unregisters every registered autoloader at once.
spl_autoload_unregister('spl_autoload_call');

?>
```

## Literal Examples
+ Using spl_autoload_call() as a callback for spl_autoload_unregister() is deprecated, use spl_autoload_functions() and spl_autoload_unregister() on each entry instead

## Alternatives
+ Iterate over spl_autoload_functions() and call spl_autoload_unregister() on each entry to unregister every autoloader explicitly.
+ Keep a reference to the specific autoloader callable your own code registered, and unregister only that one instead of relying on the magic shortcut.

## Related error messages
+ [spl_autoload_unregister](https://www.php.net/manual/en/function.spl-autoload-unregister.php)
+ [spl_autoload_register](https://www.php.net/manual/en/function.spl-autoload-register.php)
+ [spl_autoload_functions](https://www.php.net/manual/en/function.spl-autoload-functions.php)
+ [PHP RFC: Deprecations for PHP 8.5](https://wiki.php.net/rfc/deprecations_php_8_5)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()