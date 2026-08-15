# assert.bail INI setting is deprecated

## Description
`assert.bail` is a legacy INI directive from the pre-PHP 7 implementation of `assert()`. When enabled, it terminated script execution as soon as a failed assertion was encountered, instead of letting the script continue.

This behavior is redundant with throwing an `AssertionError` (the default behavior since PHP 7 when `assert.exception` is enabled), which already interrupts execution unless the exception is caught. As part of the general cleanup of the legacy assertion configuration, `assert.bail` is now deprecated.

The deprecation notice is triggered whenever `assert.bail` is set to a truthy value, either in `php.ini` or through `ini_set()`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.bail-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.bail-ini-setting-is-deprecated.html","name":"assert.bail INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 15:46:42 +0000","dateModified":"Thu, 13 Aug 2026 15:46:42 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.bail-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

ini_set('assert.bail', '1');

?>
```

## Alternatives
+ Rely on the ``AssertionError`` exception thrown by failed assertions (controlled by ``assert.exception``) to stop execution, and catch it where appropriate.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.bail`` from the code.

## Related error messages
+ [assert.active-ini-setting-is-deprecated](assert.active-ini-setting-is-deprecated.html)
+ [assert.exception-ini-setting-is-deprecated](assert.exception-ini-setting-is-deprecated.html)
+ [assert.warning-ini-setting-is-deprecated](assert.warning-ini-setting-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`assert.active-ini-setting-is-deprecated`.
In more recent PHP versions, this error message is now :ref:`assert.exception-ini-setting-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[assert](assert)