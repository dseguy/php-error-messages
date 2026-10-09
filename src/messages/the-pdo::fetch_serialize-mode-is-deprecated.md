# The PDO::FETCH_SERIALIZE mode is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-pdo::fetch_serialize-mode-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-pdo::fetch_serialize-mode-is-deprecated.html","name":"The PDO::FETCH_SERIALIZE mode is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T09:11:08+02:00","dateModified":"2026-09-24T09:11:08+02:00","description":"Combined with ``PDO::FETCH_CLASS``, the ``PDO::FETCH_SERIALIZE`` flag was meant to fetch a row by ``unserialize()``-ing one of its columns into an instance of the target class, relying on that class implementing the ``Serializable`` interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-pdo::fetch_serialize-mode-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Combined with `PDO::FETCH_CLASS`, the `PDO::FETCH_SERIALIZE` flag was meant to fetch a row by `unserialize()`-ing one of its columns into an instance of the target class, relying on that class implementing the `Serializable` interface. Beyond depending on `Serializable` -- which is itself being phased out in favour of `__serialize()`/`__unserialize()` -- the flag has a long-standing implementation bug that makes it not actually usable as documented.

As of PHP 8.1, setting or using this fetch mode emits this deprecation notice, ahead of its planned removal in PHP 9.0.

## Example

```php
<?php

$pdo = new PDO('sqlite::memory:');
$pdo->exec('CREATE TABLE t (x TEXT)');
$stmt = $pdo->query('SELECT x FROM t');

// Combined with FETCH_CLASS, this flag was meant to automatically
// unserialize() the raw column into the target class.
$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_SERIALIZE, 'stdClass');

?>
```

## Literal Examples
+ PDOStatement::setFetchMode(): The PDO::FETCH_SERIALIZE mode is deprecated
+ PDOStatement::fetch(): The PDO::FETCH_SERIALIZE mode is deprecated

## Alternatives
+ Fetch the raw column value with a plain fetch mode, then call unserialize() on it explicitly and assign the result where needed.
+ Store structured data as JSON instead of a serialized PHP value, and decode it with json_decode() after fetching.

## Related error messages
+ [%s-implements-the-serializable-interface](%s-implements-the-serializable-interface.html)

## Related error messages
+ [PHP.Watch: PDO::FETCH_SERIALIZE deprecated](https://php.watch/versions/8.1/PDO-FETCH_SERIALIZE-deprecated)
+ [PDO fetch modes manual](https://www.php.net/manual/en/pdo.constants.fetch-modes.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()