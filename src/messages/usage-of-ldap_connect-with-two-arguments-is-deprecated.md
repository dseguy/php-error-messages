# Usage of ldap_connect with two arguments is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-ldap_connect-with-two-arguments-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-ldap_connect-with-two-arguments-is-deprecated.html","name":"Usage of ldap_connect with two arguments is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``ldap_connect()`` used to accept a hostname and a port as two separate arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-ldap_connect-with-two-arguments-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ldap_connect()` used to accept a hostname and a port as two separate arguments. Passing them separately does not let the caller express whether the connection should use `ldap://` or `ldaps://`, or list several servers at once, which a single LDAP URI can do naturally.

Calling `ldap_connect()` with a separate hostname and port is now deprecated in favor of passing a single LDAP URI.

## Example

```php
<?php

$ldap = ldap_connect('ldap.example.com', 389);

?>
```

## Alternatives
+ Pass a single LDAP URI instead, for example ``ldap_connect('ldap://ldap.example.com:389')`` or ``ldap_connect('ldaps://ldap.example.com')``.

## Related error messages
+ [calling-ldap_connect()-with-oracle-specific-arguments-is-deprecated](calling-ldap\_connect\(\)-with-oracle-specific-arguments-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()