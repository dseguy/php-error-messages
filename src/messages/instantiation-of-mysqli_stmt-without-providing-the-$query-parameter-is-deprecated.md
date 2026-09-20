# Instantiation of mysqli_stmt without providing the $query parameter is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instantiation-of-mysqli_stmt-without-providing-the-$query-parameter-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instantiation-of-mysqli_stmt-without-providing-the-$query-parameter-is-deprecated.html","name":"Instantiation of mysqli_stmt without providing the $query parameter is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:00:31+00:00","dateModified":"2026-09-20T20:00:31+00:00","description":"``mysqli_stmt``'s constructor accepts an optional ``$query`` string, which, when given, prepares the statement immediately","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/instantiation-of-mysqli_stmt-without-providing-the-$query-parameter-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mysqli_stmt`'s constructor accepts an optional `$query` string, which, when given, prepares the statement immediately. Omitting it produces an object that is not fully initialized: most of its properties and methods throw until `prepare()` is called explicitly, which is a confusing two-step state for a class whose entire purpose is to represent a prepared statement. PHP 8.6 deprecates constructing (or calling `mysqli_stmt_init()` / `mysqli::stmt_init()`) without a query.

## Example

```php
<?php

$link = mysqli_connect('localhost', 'my_user', 'my_password', 'world');

$stmt = new mysqli_stmt($link);

?>
```

## Alternatives
+ Pass the SQL statement directly to the constructor: ``new mysqli_stmt($link, $query)``, or use ``mysqli_prepare()`` / ``$mysqli->prepare()``.
+ If you need the two-step flow, call ``$stmt->prepare($query)`` immediately after construction to avoid using the object while uninitialized.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()