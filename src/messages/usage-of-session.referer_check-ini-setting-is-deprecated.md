# Usage of session.referer_check INI setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-session.referer_check-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-session.referer_check-ini-setting-is-deprecated.html","name":"Usage of session.referer_check INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:08 +0000","dateModified":"Tue, 11 Aug 2026 20:56:08 +0000","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-session.referer_check-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`session.referer_check` makes `session_start()` check that the `Referer` HTTP header sent by the client starts with a given substring, rejecting the session otherwise. This mechanism dates back to a time when it was considered a lightweight session-hijacking mitigation, but the `Referer` header is client-supplied and trivially spoofed, so it provides no real security guarantee.

As part of the deprecation of PHP's automatic, URL-based session ID propagation (also affecting `session.use_trans_sid` and related directives), setting `session.referer_check` to a non-empty value is deprecated as of PHP 8.4.0.

## Example

```php
<?php

ini_set('session.referer_check', 'example.com');

?>
```

## Alternatives
+ Remove ``session.referer_check`` from ``php.ini`` and from the code; do not rely on the ``Referer`` header for session security.
+ Use proper session security measures instead, such as regenerating the session ID on privilege change and binding sessions to other verified signals.
