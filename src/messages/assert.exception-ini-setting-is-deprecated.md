# assert.exception INI setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.exception-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.exception-ini-setting-is-deprecated.html","name":"assert.exception INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 15:46:49 +0000","dateModified":"Thu, 13 Aug 2026 15:46:49 +0000","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.exception-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`assert.exception` controls whether a failed `assert()` throws an `AssertionError` (the default since PHP 7) or falls back to the legacy behavior of emitting a warning and continuing execution.

Disabling exceptions for assertions revives pre-PHP 7 behavior that is inconsistent with the rest of the language, where failures are normally reported through exceptions or errors. As part of the cleanup of the legacy `assert.*` configuration, this directive is now deprecated.

The deprecation notice is triggered whenever `assert.exception` is set to a falsy value, either in `php.ini` or through `ini_set()`.

## Example

```php
<?php

ini_set('assert.exception', '0');

?>
```

## Alternatives
+ Keep ``assert.exception`` enabled (the default) and catch ``AssertionError`` where a failed assertion needs to be handled instead of propagating.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.exception`` from the code.

## Related error messages
+ [assert.active-ini-setting-is-deprecated](assert.active-ini-setting-is-deprecated.html)
+ [assert.bail-ini-setting-is-deprecated](assert.bail-ini-setting-is-deprecated.html)
+ [assert.warning-ini-setting-is-deprecated](assert.warning-ini-setting-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`assert.bail-ini-setting-is-deprecated`.
In more recent PHP versions, this error message is now :ref:`assert.warning-ini-setting-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[assert](assert)