# must be a callable, null given

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-callable,-null-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-callable,-null-given.html","name":"must be a callable, null given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The ``PDOStatement::fetchAll()`` accepts a 2nd argument as a callback","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-callable,-null-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `PDOStatement::fetchAll()` accepts a 2nd argument as a callback. That method processes the returning rows before they are returned by the method itself. By default, the method returns arrays, and doesn't need the callback. When the callback is provided, it must be a valid callback, and, as such, can't be `null`.

This error is the same as Argument #%d ($name) must be of type %s, %s given, but is specific to the PDO extension, and the `PDOStatement::fetchAll()`. The original problem is also the same.

## Example

```php
<?php

// Connection to the database
$db = new Pdo();

// Dummy valid SQL query
$stmt = $db->query('SELECT * FROM table');

try {
    var_dump($stmt->fetchAll(PDO::FETCH_FUNC, NULL));
} catch (\Throwable $e) {
    echo $e::class, ': ', $e->getMessage(), \PHP_EOL;
}

?>
```

## Alternatives
+ Remove the second ``$callback`` argument in the call to the ``PDOStatement::fetchAll()`` method.
+ Use a valid second ``$callback`` argument in the call to the ``PDOStatement::fetchAll()`` method.

## Related error messages
+ [argument-#%d-($%s)-must-be-of-type-%s,-%s-given](argument-#%d-\($%s\)-must-be-of-type-%s,-%s-given.html)
