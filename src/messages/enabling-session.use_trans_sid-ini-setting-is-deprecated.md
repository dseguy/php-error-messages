# Enabling session.use_trans_sid INI setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enabling-session.use_trans_sid-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enabling-session.use_trans_sid-ini-setting-is-deprecated.html","name":"Enabling session.use_trans_sid INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-02-22T21:56:02-05:00","dateModified":"2025-09-18T06:57:58+02:00","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/enabling-session.use_trans_sid-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`session.use_trans_sid` is marked for deprecation. When that directive will be removed, the feature will also be removed. Trans ID are session ID that are propagated via `GET` (in the URL) and `POST` (in the HTTP headers).

## Example

```php
<?php

if (!ini_get('session.use_trans_sid')) {
    die('it is recommended to not use trans id for sessions.');
}

?>
```

## Alternatives
+ Set ``session.use_trans_sid`` to off in php.ini.
+ Remove usage of  ini_get() with ``session.use_trans_sid`` in the code.
+ Remove usage of  ini_set() with ``session.use_trans_sid`` in the code.

## Related error messages
+ [disabling-session.use_only_cookies-ini-setting-is-deprecated](disabling-session.use\_only\_cookies-ini-setting-is-deprecated.html)
