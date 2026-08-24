# Calling dba_fetch() with $dba at the 3rd parameter is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-dba_fetchqr-with-$dba-at-the-3rd-parameter-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-dba_fetchqr-with-$dba-at-the-3rd-parameter-is-deprecated.html","name":"Calling dba_fetch() with $dba at the 3rd parameter is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``dba_fetch()`` historically accepted the database handle as its 3rd argument, behind an optional ``$skip`` argument used to select a duplicate key: ``dba_fetch(string $key, int $skip, resource $dba)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/calling-dba_fetchqr-with-$dba-at-the-3rd-parameter-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`dba_fetch()` historically accepted the database handle as its 3rd argument, behind an optional `$skip` argument used to select a duplicate key: `dba_fetch(string $key, int $skip, resource $dba)`.

Every other `dba_*()` function takes the database handle as its 2nd argument, right after the key, so this older signature was inconsistent with the rest of the extension. Calling `dba_fetch()` with the handle in the 3rd position is now deprecated in favor of the consistent signature.

## Example

```php
<?php

$dba = dba_open('/tmp/test.db', 'c', 'flatfile');

$value = dba_fetch('some_key', 0, $dba);

?>
```

## Alternatives
+ Pass the database handle as the 2nd argument instead: ``dba_fetch(string $key, resource $dba, int $skip = 0)``.

## Related error messages
+ [passing-false-or-null-is-deprecated-since-8.4](passing-false-or-null-is-deprecated-since-8.4.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()