# assert.warning INI setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.warning-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.warning-ini-setting-is-deprecated.html","name":"assert.warning INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``assert","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.warning-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`assert.warning` is a legacy INI directive that, when `assert.exception` is disabled, controls whether a failed `assert()` call emits an `E_WARNING`. It is part of the pre-PHP 7 assertion configuration that predates `AssertionError`.

Since this directive only has an effect together with the also-deprecated `assert.exception`, and there is no equivalent replacement to keep emitting a custom warning message, it is now deprecated as well. Once removed in PHP 9, disabling it will no longer be possible.

The deprecation notice is triggered whenever `assert.warning` is set to a falsy value, either in `php.ini` or through `ini_set()`.

## Example

```php
<?php

ini_set('assert.warning', '0');

?>
```

## Alternatives
+ Rely on the ``AssertionError`` exception thrown by failed assertions instead of the legacy warning-based reporting.
+ Remove ``ini_set()``/``ini_get()`` calls involving ``assert.warning`` from the code.

## Related error messages
+ [assert.active-ini-setting-is-deprecated](assert.active-ini-setting-is-deprecated.html)
+ [assert.bail-ini-setting-is-deprecated](assert.bail-ini-setting-is-deprecated.html)
+ [assert.exception-ini-setting-is-deprecated](assert.exception-ini-setting-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`assert.exception-ini-setting-is-deprecated`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[assert](assert)