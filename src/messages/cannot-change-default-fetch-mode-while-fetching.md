# Cannot change default fetch mode while fetching

## Description
`PDOStatement::setFetchMode()` refuses to run while the statement is in the middle of fetching a row. This happens when `PDO::FETCH_CLASS` is used and the constructor of the target class receives the statement object itself (via the constructor arguments) and calls `setFetchMode()` on it before the current `fetch()` call has finished.

Prior to this guard, such a re-entrant call could corrupt the statement's internal fetch state and lead to a use-after-free. PDO now detects the situation and throws an `Error` instead.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-change-default-fetch-mode-while-fetching.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-change-default-fetch-mode-while-fetching.html","name":"Cannot change default fetch mode while fetching","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 12:32:23 +0000","dateModified":"Sat, 25 Jul 2026 12:32:23 +0000","description":"``PDOStatement::setFetchMode()`` refuses to run while the statement is in the middle of fetching a row","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-change-default-fetch-mode-while-fetching.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class Test {
    public string $val1;
    public string $val2;

    public function __construct(mixed $stmt) {
        if ($stmt instanceof PDOStatement) {
            // Re-entrant call -- the statement is still fetching the current row
            $stmt->setFetchMode(PDO::FETCH_CLASS, self::class, [$this->val2]);
        }
    }
}

$stmt = $pdo->prepare('SELECT val1, val2 FROM example');
$stmt->setFetchMode(PDO::FETCH_CLASS, Test::class, [$stmt]);
$stmt->execute();

$stmt->fetch();

?>
```

## Alternatives
+ Call ``setFetchMode()`` before ``fetch()``/``fetchAll()`` starts, never from within a constructor triggered by the fetch itself.
+ Avoid passing the live ``PDOStatement`` as a constructor argument to the fetched class; pass the data it needs instead.
+ If the fetch mode must change mid-iteration, finish consuming the current row first, then call ``setFetchMode()`` before the next ``fetch()``.

## Related error messages
+ [PDOStatement::setFetchMode](https://www.php.net/manual/en/pdostatement.setfetchmode.php)
+ [PDOStatement::fetch](https://www.php.net/manual/en/pdostatement.fetch.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()