# must be a valid context engine ID

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-context-engine-id.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-context-engine-id.html","name":"must be a valid context engine ID","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``SNMP::setSecurity()``'s ``$contextEngineId`` argument is expected to be a hex-encoded SNMPv3 context engine ID, which the extension decodes back to raw bytes before handing it to the underlying Net-SNMP session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-valid-context-engine-id.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SNMP::setSecurity()`'s `$contextEngineId` argument is expected to be a hex-encoded SNMPv3 context engine ID, which the extension decodes back to raw bytes before handing it to the underlying Net-SNMP session.

As of PHP 8.6, a value that cannot be decoded as hex throws a `ValueError`, instead of silently leaving the context engine ID unset on the session.

## Example

```php
<?php

$snmp = new SNMP(SNMP::VERSION_3, 'localhost', 'user');

$snmp->setSecurity('authPriv', 'SHA', 'authpass', 'AES', 'privpass', '', 'not-hex');

?>
```

## Literal Examples
+ SNMP::setSecurity(): Argument #7 ($contextEngineId) must be a valid context engine ID

## Alternatives
+ Pass a valid hex-encoded string as the $contextEngineId argument to SNMP::setSecurity(), or omit it to leave the context engine ID unset.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, this emitted an E_WARNING ("Bad engine ID value '%s'") and left the context engine ID unset, instead of throwing.](Previously, this emitted an E_WARNING ("Bad engine ID value '%s'") and left the context engine ID unset, instead of throwing.)