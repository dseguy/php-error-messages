# Automatic fetching of PostgreSQL connection is deprecated

## Description
Many `pg_*` functions, such as `pg_query()` and `pg_query_params()`, accept a PostgreSQL connection as their first argument, but this parameter used to be optional: when omitted, PHP implicitly reused the last connection opened with `pg_connect()` or `pg_pconnect()`.

This implicit `default_link` behavior makes it easy to accidentally query the wrong connection when a script opens more than one, and it forces the pgsql extension to keep a hidden, mutable global state. As of PHP 8.1.0, relying on this default connection is deprecated, and an explicit connection must be passed instead.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/automatic-fetching-of-postgresql-connection-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/automatic-fetching-of-postgresql-connection-is-deprecated.html","name":"Automatic fetching of PostgreSQL connection is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 15:47:18 +0000","dateModified":"Thu, 13 Aug 2026 15:47:18 +0000","description":"Many ``pg_*`` functions, such as ``pg_query()`` and ``pg_query_params()``, accept a PostgreSQL connection as their first argument, but this parameter used to be optional: when omitted, PHP implicitly reused the last connection opened with ``pg_connect()`` or ``pg_pconnect()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/automatic-fetching-of-postgresql-connection-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

pg_connect('host=localhost dbname=test');

// The connection argument is omitted: PHP implicitly reuses
// the last connection opened by pg_connect()/pg_pconnect().
$result = pg_query('SELECT 1');

?>
```

## Alternatives
+ Store the resource/object returned by ``pg_connect()`` or ``pg_pconnect()`` and pass it explicitly as the first argument to every ``pg_*`` function used afterwards.

## Related error messages
+ [passing-connection-object-as-an-argument-is-deprecated](passing-connection-object-as-an-argument-is-deprecated.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[pg_query](pg_query)