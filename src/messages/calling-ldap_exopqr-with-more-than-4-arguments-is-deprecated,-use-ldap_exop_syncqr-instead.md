# Calling ldap_exop() with more than 4 arguments is deprecated, use ldap_exop_sync() instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ldap_exopqr-with-more-than-4-arguments-is-deprecated,-use-ldap_exop_syncqr-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ldap_exopqr-with-more-than-4-arguments-is-deprecated,-use-ldap_exop_syncqr-instead.html","name":"Calling ldap_exop() with more than 4 arguments is deprecated, use ldap_exop_sync() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``ldap_exop()`` used to serve two purposes at once: sending an LDAP extended operation and, when called with 5 or 6 arguments, also synchronously waiting for the response and returning its data and OID through reference parameters (``&$response_data``, ``&$response_oid``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-ldap_exopqr-with-more-than-4-arguments-is-deprecated,-use-ldap_exop_syncqr-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`ldap_exop()` used to serve two purposes at once: sending an LDAP extended operation and, when called with 5 or 6 arguments, also synchronously waiting for the response and returning its data and OID through reference parameters (`&$response_data`, `&$response_oid`).

Mixing the asynchronous, low-level operation with an optional synchronous, high-level convenience wrapper in a single overloaded function made the API harder to reason about. Calling `ldap_exop()` with more than 4 arguments is now deprecated in favor of a dedicated synchronous function.

## Example

```php
<?php

$ldap = ldap_connect('ldap://ldap.example.com');
ldap_bind($ldap);

ldap_exop($ldap, LDAP_EXOP_WHO_AM_I, null, null, $response_data, $response_oid);

?>
```

## Alternatives
+ Use ``ldap_exop_sync()`` when you need to send the operation and immediately read back its response data and OID.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()