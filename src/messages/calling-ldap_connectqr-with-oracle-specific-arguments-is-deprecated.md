# Calling ldap_connect() with Oracle-specific arguments is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ldap_connectqr-with-oracle-specific-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ldap_connectqr-with-oracle-specific-arguments-is-deprecated.html","name":"Calling ldap_connect() with Oracle-specific arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-21T07:46:43+00:00","dateModified":"2026-08-21T07:46:43+00:00","description":"When PHP's LDAP extension is built against Oracle Instant Client, ``ldap_connect()`` gained two extra, Oracle-specific parameters (``$wallet`` and ``$wallet_passwd``, plus an ``$auth_mode`` flag) on top of the hostname and port, to authenticate using an Oracle wallet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ldap_connectqr-with-oracle-specific-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
When PHP's LDAP extension is built against Oracle Instant Client, `ldap_connect()` gained two extra, Oracle-specific parameters (`$wallet` and `$wallet_passwd`, plus an `$auth_mode` flag) on top of the hostname and port, to authenticate using an Oracle wallet.

This Oracle-only overload is now deprecated along with the rest of `ldap_connect()`'s multi-argument forms, in favor of a dedicated function that only exists in Oracle-enabled builds.

## Example

```php
<?php

$ldap = ldap_connect('ldap.example.com', 389, '/path/to/wallet', 'wallet_password', 1);

?>
```

## Alternatives
+ Use ``ldap_connect_wallet()`` to connect with an Oracle wallet instead of passing wallet arguments to ``ldap_connect()``.

## Related error messages
+ [usage-of-ldap_connect-with-two-arguments-is-deprecated](usage-of-ldap\_connect-with-two-arguments-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()