# assert.active INI setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.active-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.active-ini-setting-is-deprecated.html","name":"assert.active INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 15:46:37 +0000","dateModified":"Thu, 13 Aug 2026 15:46:37 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.active-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`assert.active` is a legacy INI directive that dates back to the pre-PHP 7 implementation of `assert()`, where assertions could be toggled on or off at runtime through several `assert.*` INI settings.

Since PHP 7, assertion behavior is primarily controlled by the `zend.assertions` directive, which supports three modes: 1 (generate and execute code, development mode), 0 (generate code, but skip execution at runtime), and -1 (do not generate code, production mode). `assert.active` became redundant, only affecting whether `assert()` calls are executed at all, and is now deprecated.

The deprecation notice is triggered whenever `assert.active` is set to a falsy value, either in `php.ini` or through `ini_set()`.

## Example

```php
<?php

ini_set('assert.active', '0');

?>
```

## Alternatives
+ Use the ``zend.assertions`` directive to control whether assertions are compiled and executed.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.active`` from the code.

## Related error messages
+ [assert.bail-ini-setting-is-deprecated](assert.bail-ini-setting-is-deprecated.html)
+ [assert.exception-ini-setting-is-deprecated](assert.exception-ini-setting-is-deprecated.html)
+ [assert.warning-ini-setting-is-deprecated](assert.warning-ini-setting-is-deprecated.html)

In more recent PHP versions, this error message is now :ref:`assert.bail-ini-setting-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[assert](assert)