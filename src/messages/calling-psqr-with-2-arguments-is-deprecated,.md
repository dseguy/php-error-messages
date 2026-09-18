# Calling %s() with 2 arguments is deprecated,

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqr-with-2-arguments-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqr-with-2-arguments-is-deprecated,.html","name":"Calling %s() with 2 arguments is deprecated,","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-09T18:11:49+02:00","dateModified":"2026-09-09T18:11:49+02:00","description":"This is the generic shape of a family of deprecation notices introduced by the ``Deprecate functions with overloaded signatures`` RFC","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-psqr-with-2-arguments-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the generic shape of a family of deprecation notices introduced by the `Deprecate functions with overloaded signatures` RFC. Several built-in functions used to accept more than one call shape, distinguished only by how many arguments were passed, such as `pg_fetch_result()`, `pg_field_prtlen()` and `pg_field_is_null()` (2-argument form relying on an implicit row cursor) or `stream_context_set_option()` (2-argument form taking a whole options array instead of a single wrapper/option/value triple).

As of PHP 8.4, calling any of these functions with the specific, older argument count that made the overload ambiguous emits this deprecation notice, naming the function and pointing to its replacement. The exact wording of the second half of the message (after the comma) depends on the function.

## Example

```php
<?php

$conn = pg_connect('host=localhost dbname=test');
$result = pg_query($conn, 'SELECT id, name FROM users');

// 2-argument form: implicit row cursor instead of an explicit $row
echo pg_fetch_result($result, 'name'), "\n";

?>
```

## Literal Examples
+ Calling pg_fetch_result() with 2 arguments is deprecated, use the 3-parameter signature with a null $row parameter instead
+ Calling stream_context_set_option() with 2 arguments is deprecated, use stream_context_set_options() instead
+ Calling pg_field_is_null() with 2 arguments is deprecated, use the 3-parameter signature with a null $row parameter instead

## Alternatives
+ Check the specific function's documentation for its replacement: a dedicated function (e.g. stream_context_set_options()) or the newer, explicit argument count (e.g. always passing $row to pg_fetch_result()).

## Related error messages
+ [calling-pg_fetch_result()-with-2-arguments-is-deprecated,](calling-pg\_fetch\_result\(\)-with-2-arguments-is-deprecated,.html)
+ [calling-stream_context_set_option()-with-2-arguments-is-deprecated,](calling-stream\_context\_set\_option\(\)-with-2-arguments-is-deprecated,.html)
+ [calling-reflectionmethod::__construct()-with-1-argument-is-deprecated,](calling-reflectionmethod::\_\_construct\(\)-with-1-argument-is-deprecated,.html)

## Related error messages
+ [PHP RFC: Deprecate functions with overloaded signatures](https://wiki.php.net/rfc/deprecate_functions_with_overloaded_signatures)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()