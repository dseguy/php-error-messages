# The driver_version property is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-driver_version-property-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-driver_version-property-is-deprecated.html","name":"The driver_version property is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:09:09+00:00","dateModified":"2026-09-24T07:09:09+00:00","description":"``mysqli_driver::$driver_version`` reads back the internal constant ``MYSQLI_VERSION_ID``, which sounds like it should report the version of the underlying MySQL client library (mysqlnd or libmysqlclient) but does not: it is a hardcoded value (``101009``) left over from mysqli's early days as a standalone PECL extension, and it has not tracked anything meaningful for a long time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-driver_version-property-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mysqli_driver::$driver_version` reads back the internal constant `MYSQLI_VERSION_ID`, which sounds like it should report the version of the underlying MySQL client library (mysqlnd or libmysqlclient) but does not: it is a hardcoded value (`101009`) left over from mysqli's early days as a standalone PECL extension, and it has not tracked anything meaningful for a long time.

As of PHP 8.1, reading this property emits a deprecation notice; it keeps returning the same frozen value for now, ahead of being removed in a future version.

## Example

```php
<?php

$driver = new mysqli_driver();

// Reading this property is deprecated; it has always just repeated
// PHP's own version number, not any driver-specific version.
var_dump($driver->driver_version);

?>
```

## Literal Examples
+ The driver_version property is deprecated

## Alternatives
+ Use PHP_VERSION or PHP_VERSION_ID directly if a PHP version number was actually wanted.
+ Use mysqli_get_client_info() / mysqli_driver::$client_info if the actual client library version is needed.

## Related error messages
+ [PHP.Watch: mysqli_driver->driver_version deprecation](https://php.watch/versions/8.1/mysqli_driver-driver_version-deprecation)
+ [mysqli_driver manual](https://www.php.net/manual/en/class.mysqli-driver.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()