# assert.callback INI setting is deprecated

## Description
The `php.ini` directive `assert.callback` is deprecated, alongside several features from the assert functions. It should not be set anymore in the code.

Note that a call to `ini_get()` will not generate the warning: only the `ini_set()`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.callback-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.callback-ini-setting-is-deprecated.html","name":"assert.callback INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:45 +0000","dateModified":"Tue, 31 Mar 2026 09:10:45 +0000","description":"The ``php","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/assert.callback-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

ini_set('assert.callback', 1);

?>
```

## Alternatives
+ Remove the call to ``assert.callback`` and its dependencies.
