# must contain a type for object ID %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-contain-a-type-for-object-id-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-contain-a-type-for-object-id-ps.html","name":"must contain a type for object ID %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``SNMP::set()`` lets ``$objectId``, ``$type``, and ``$value`` each be passed as parallel arrays, matched up element by element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-contain-a-type-for-object-id-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SNMP::set()` lets `$objectId`, `$type`, and `$value` each be passed as parallel arrays, matched up element by element. Every object ID in `$objectId` needs a corresponding entry in `$type` describing what kind of SNMP value is being set.

If `$type` runs out of elements before `$objectId` does, the object ID that has no matching type now throws a `ValueError` naming that OID, instead of silently skipping it with a warning.

## Example

```php
<?php

$snmp = new SNMP(SNMP::VERSION_2c, 'localhost', 'private');

$snmp->set(
    ['.1.3.6.1.2.1.1.6.0'],
    [],
    ['New location']
);

?>
```

## Literal Examples
+ SNMP::set(): Argument #2 ($type) must contain a type for object ID '.1.3.6.1.2.1.1.6.0'

## Alternatives
+ Make sure the $type array passed to SNMP::set() has one entry for every object ID in $objectId.

## Related error messages
+ [must-contain-a-value-for-object-id-%s](must-contain-a-value-for-object-id-%s.html)
+ [must-not-be-empty-when-passed-as-an-array](must-not-be-empty-when-passed-as-an-array.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, this emitted an E_WARNING ("'%s': no type set") and silently skipped the affected object ID, instead of throwing.](Previously, this emitted an E_WARNING ("'%s': no type set") and silently skipped the affected object ID, instead of throwing.)