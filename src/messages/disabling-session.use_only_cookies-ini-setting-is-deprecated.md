# Disabling session.use_only_cookies INI setting is deprecated

## Description
`session.use_only_cookies` is marked for deprecation. When that directive will be removed, the feature will be set to always on.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/disabling-session.use_only_cookies-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/disabling-session.use_only_cookies-ini-setting-is-deprecated.html","name":"Disabling session.use_only_cookies INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/disabling-session.use_only_cookies-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

if (!ini_get('session.use_only_cookies')) {
    die('it is recommended to only use cookies for sessions.');
}

?>
```

## Alternatives
+ Set ``session.use_only_cookies`` to on in php.ini.
+ Remove usage of  ini_get() with ``session.use_only_cookies`` in the code.
+ Remove usage of  ini_set() with ``session.use_only_cookies`` in the code.

## Related error messages
+ [enabling-session.use_trans_sid-ini-setting-is-deprecated](asdf)
