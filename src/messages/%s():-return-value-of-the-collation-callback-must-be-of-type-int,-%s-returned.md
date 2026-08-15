# %s(): Return value of the collation callback must be of type int, %s returned

## Description
`Pdo\Sqlite::createCollation()` registers a userland function to be used as an SQL collating sequence. Like `strcmp()`, the callback receives two strings and must return a negative, zero, or positive `int` depending on whether the first string sorts before, the same as, or after the second one.

As of PHP 8.5, the return value of the callback is strictly checked. Returning anything that is not an `int` -- for instance a `bool` from a `<=>` comparison used incorrectly, or nothing at all because of a missing `return` -- raises a `TypeError`, instead of the previous behavior where a non-int value silently made the collation undefined.

The legacy `PDO::sqliteCreateCollation()` method, kept for backward compatibility, is affected by the same strict check.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-return-value-of-the-collation-callback-must-be-of-type-int,-%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-return-value-of-the-collation-callback-must-be-of-type-int,-%s-returned.html","name":"%s(): Return value of the collation callback must be of type int, %s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:32:23 +0000","dateModified":"Sat, 25 Jul 2026 12:32:23 +0000","description":"``Pdo\\Sqlite::createCollation()`` registers a userland function to be used as an SQL collating sequence","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/%s():-return-value-of-the-collation-callback-must-be-of-type-int,-%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$pdo = new Pdo\Sqlite('sqlite::memory:');

$pdo->createCollation('natcmp', function (string $a, string $b) {
    // strcmp() convention expected -- negative, zero or positive int
    return $a <=> $b ? strnatcasecmp($a, $b) <=> 0 : 0;
});

$pdo->exec('CREATE TABLE test (name TEXT)');
$pdo->query('SELECT name FROM test ORDER BY name COLLATE natcmp');

?>
```

## Literal Examples
+ Pdo\Sqlite::createCollation(): Return value of the collation callback must be of type int, bool returned

## Alternatives
+ Make sure the callback always returns an ``int``, following the ``strcmp()`` convention of negative/zero/positive.
+ Use the spaceship operator ``<=>`` directly on the two strings, or on a derived comparable value, since it already returns an ``int``.
+ Declare an ``int`` return type on the callback to catch a wrong return value while writing it.

## Related error messages
+ [%s():-return-value-of-the-authorizer-callback-must-be-of-type-int,-%s-returned](asdf)
+ [the-sqlite3-object-has-not-been-correctly-initialised-or-is-already-closed](asdf)

## Related error messages
+ [Pdo\Sqlite::createCollation](https://www.php.net/manual/en/pdo-sqlite.createcollation.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()