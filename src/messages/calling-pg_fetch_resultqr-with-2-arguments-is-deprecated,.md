# Calling pg_fetch_result() with 2 arguments is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-pg_fetch_resultqr-with-2-arguments-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-pg_fetch_resultqr-with-2-arguments-is-deprecated,.html","name":"Calling pg_fetch_result() with 2 arguments is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T14:13:47+00:00","dateModified":"2026-09-09T14:13:47+00:00","description":"``pg_fetch_result()`` originally accepted two different call shapes: a 3-argument form giving the row and field explicitly, and a 2-argument form that omitted the row and implicitly fetched from an internal, auto-advancing row cursor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-pg_fetch_resultqr-with-2-arguments-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`pg_fetch_result()` originally accepted two different call shapes: a 3-argument form giving the row and field explicitly, and a 2-argument form that omitted the row and implicitly fetched from an internal, auto-advancing row cursor. Mixing an explicit-row API and a stateful, cursor-based one in a single overloaded function made the behavior harder to predict, especially when other calls interleaved with the cursor's position.

As of PHP 8.4, calling `pg_fetch_result()` with only 2 arguments is deprecated in favor of always passing 3 arguments, using `null` explicitly for `$row` when the old auto-advancing behavior is wanted.

## Example

```php
<?php

$conn = pg_connect('host=localhost dbname=test');
$result = pg_query($conn, 'SELECT id, name FROM users');

// 2-argument form: relies on an implicit "current row" cursor
echo pg_fetch_result($result, 'name'), "\n";

?>
```

## Literal Examples
+ Calling pg_fetch_result() with 2 arguments is deprecated, use the 3-parameter signature with a null $row parameter instead

## Alternatives
+ Call pg_fetch_result() with 3 arguments, passing null as $row to keep the auto-advancing cursor behavior explicitly.
+ Track the row index yourself and always pass it explicitly, instead of relying on the implicit cursor.

## Related error messages
+ [calling-%s()-with-2-arguments-is-deprecated,](calling-%s\(\)-with-2-arguments-is-deprecated,.html)

## Related error messages
+ [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()