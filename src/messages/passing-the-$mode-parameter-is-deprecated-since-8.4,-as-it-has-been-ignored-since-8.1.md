# Passing the $mode parameter is deprecated since 8.4, as it has been ignored since 8.1

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-the-$mode-parameter-is-deprecated-since-8.4,-as-it-has-been-ignored-since-8.1.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-the-$mode-parameter-is-deprecated-since-8.4,-as-it-has-been-ignored-since-8.1.html","name":"Passing the $mode parameter is deprecated since 8.4, as it has been ignored since 8.1","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T18:11:49+02:00","dateModified":"2026-09-09T18:11:49+02:00","description":"``mysqli_store_result()`` (and ``mysqli::store_result()``) used to accept an optional ``$mode`` flag, ``MYSQLI_STORE_RESULT_COPY_DATA``, telling mysqlnd to copy fetched data out of its internal buffer instead of referencing it directly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-the-$mode-parameter-is-deprecated-since-8.4,-as-it-has-been-ignored-since-8.1.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mysqli_store_result()` (and `mysqli::store_result()`) used to accept an optional `$mode` flag, `MYSQLI_STORE_RESULT_COPY_DATA`, telling mysqlnd to copy fetched data out of its internal buffer instead of referencing it directly. As of PHP 8.1, mysqlnd's internal buffering changed and this flag no longer has any effect: the parameter is silently ignored no matter what is passed.

Since code could keep passing `$mode` for years without any indication that it did nothing, PHP 8.4 adds a deprecation notice specifically for that: passing the parameter at all, regardless of its value, is now reported as deprecated.

## Example

```php
<?php

$mysqli = new mysqli('localhost', 'user', 'password', 'database');
$mysqli->query('SELECT id FROM users', MYSQLI_USE_RESULT);

$result = $mysqli->store_result(MYSQLI_STORE_RESULT_COPY_DATA);

?>
```

## Literal Examples
+ Passing the $mode parameter is deprecated since 8.4, as it has been ignored since 8.1

## Alternatives
+ Stop passing the $mode argument (and the MYSQLI_STORE_RESULT_COPY_DATA constant) to store_result(); it has had no effect since PHP 8.1.

## Related error messages
+ [mysqli::store_result()](https://www.php.net/manual/en/mysqli.store-result.php)
+ [PHP RFC: Deprecations for PHP 8.4](https://wiki.php.net/rfc/deprecations_php_8_4)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[The $mode parameter (MYSQLI_STORE_RESULT_COPY_DATA) already stopped having any effect in PHP 8.1, without any notice. PHP 8.4 only adds the deprecation notice; the (lack of) behavior itself is unchanged.](The $mode parameter (MYSQLI_STORE_RESULT_COPY_DATA) already stopped having any effect in PHP 8.1, without any notice. PHP 8.4 only adds the deprecation notice; the (lack of) behavior itself is unchanged.)