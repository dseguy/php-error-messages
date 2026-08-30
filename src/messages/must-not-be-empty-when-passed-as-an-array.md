# must not be empty when passed as an array

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty-when-passed-as-an-array.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty-when-passed-as-an-array.html","name":"must not be empty when passed as an array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-26T09:16:12+00:00","dateModified":"2026-08-26T09:16:12+00:00","description":"``SNMP::get()``, ``::getnext()``, ``::walk()``, and ``::set()`` accept ``$objectId`` as either a single string or an array of object IDs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-be-empty-when-passed-as-an-array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SNMP::get()`, `::getnext()`, `::walk()`, and `::set()` accept `$objectId` as either a single string or an array of object IDs. An empty array carries no object IDs at all, so there is nothing for the query to operate on.

As of PHP 8.6, passing an empty array throws a `ValueError`, instead of the extension emitting a global error and returning false without saying which argument was the problem.

## Example

```php
<?php

$snmp = new SNMP(SNMP::VERSION_2c, 'localhost', 'public');

$snmp->get([]);

?>
```

## Literal Examples
+ SNMP::get(): Argument #1 ($objectId) must not be empty when passed as an array
+ SNMP::set(): Argument #1 ($objectId) must not be empty when passed as an array

## Alternatives
+ Pass at least one object ID, either as a string or as a non-empty array, to SNMP::get()/getnext()/walk()/set().

## Related error messages
+ [must-contain-a-type-for-object-id-%s](must-contain-a-type-for-object-id-%s.html)
+ [must-contain-a-value-for-object-id-%s](must-contain-a-value-for-object-id-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, this threw a generic ValueError ("Array of object IDs must not be empty") that did not name the affected argument.](Previously, this threw a generic ValueError ("Array of object IDs must not be empty") that did not name the affected argument.)