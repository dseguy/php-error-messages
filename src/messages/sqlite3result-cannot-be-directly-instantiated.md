# SQLite3Result cannot be directly instantiated

## Description
`Sqlite3Result` is returned after executing a SQL query on a Sqlite3 database, with such method as `query` or `execute`.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/sqlite3result-cannot-be-directly-instantiated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/sqlite3result-cannot-be-directly-instantiated.html","name":"SQLite3Result cannot be directly instantiated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Jul 2026 15:31:33 +0000","dateModified":"Sat, 25 Jul 2026 15:31:33 +0000","description":"``Sqlite3Result`` is returned after executing a SQL query on a Sqlite3 database, with such method as ``query`` or ``execute``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/sqlite3result-cannot-be-directly-instantiated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

new Sqlite3Result();

?>
```

## Alternatives
+ Call a valid query to obtain an object of that class.

## Related error messages
+ [cannot-directly-construct-directory,-use-dir()-instead](cannot-directly-construct-directory,-use-dir\(\)-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()