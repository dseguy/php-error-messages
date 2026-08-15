# Passing connection object as an argument is deprecated

## Description
`mysqli_get_client_info()` reports the version of the underlying MySQL client library that PHP was compiled/linked against. This information is a property of the client library itself, not of any particular connection, so the function never actually needed a connection argument, even though its procedural signature historically accepted one for consistency with other `mysqli_*` functions.

Passing a connection object to this function has no effect on the result, and is deprecated as of PHP 8.1.0 to make that clear.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-connection-object-as-an-argument-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-connection-object-as-an-argument-is-deprecated.html","name":"Passing connection object as an argument is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:19 +0000","dateModified":"Tue, 11 Aug 2026 20:55:19 +0000","description":"``mysqli_get_client_info()`` reports the version of the underlying MySQL client library that PHP was compiled\/linked against","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-connection-object-as-an-argument-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$mysqli = mysqli_connect('localhost', 'user', 'password');

// The connection argument is ignored by this function.
echo mysqli_get_client_info($mysqli);

?>
```

## Alternatives
+ Call ``mysqli_get_client_info()`` without arguments, e.g. ``mysqli_get_client_info()``.
+ When using the object-oriented API, use ``mysqli_get_client_info()`` (not a method call), since the client info is not connection-specific.

## Related error messages
+ [automatic-fetching-of-postgresql-connection-is-deprecated](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mysqli_get_client_info](mysqli_get_client_info)