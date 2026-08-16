# must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear.html","name":"must be one of PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-27T11:56:36+01:00","dateModified":"2025-09-14T18:09:14+02:00","description":"pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-one-of-pgsql_notice_last,-pgsql_notice_all,-or-pgsql_notice_clear.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
pg_last_notice() 2nd argument must be one of 3 possible pgsql constants: PGSQL_NOTICE_LAST, PGSQL_NOTICE_ALL, or PGSQL_NOTICE_CLEAR.

It is possible to use raw integers, instead of the constants, although this is not recommended.

## Example

```php
<?php

try {
    var_dump(pg_last_notice($db, 99));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

?>
```

## Alternatives
+ Use one of the three constants.

## Related error messages
+ [PredefinedConstants](https://www.php.net/manual/en/pgsql.constants.php#constant.pgsql-notice-all)
