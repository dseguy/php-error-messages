# has a malformed IPv6 address, closing square bracket missing

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/has-a-malformed-ipv6-address,-closing-square-bracket-missing.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/has-a-malformed-ipv6-address,-closing-square-bracket-missing.html","name":"has a malformed IPv6 address, closing square bracket missing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"``SNMP::__construct()`` accepts an IPv6 ``$hostname`` wrapped in square brackets, such as ``[::1]`` or ``[::1]:1161`` for a non-default port","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/has-a-malformed-ipv6-address,-closing-square-bracket-missing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SNMP::__construct()` accepts an IPv6 `$hostname` wrapped in square brackets, such as `[::1]` or `[::1]:1161` for a non-default port. The closing `]` is what tells the parser where the address ends and an optional `:port` suffix begins.

If the hostname starts with `[` but never contains a matching `]`, the address cannot be parsed. As of PHP 8.6, this now throws a `ValueError` instead of emitting a warning and leaving the session half-constructed.

## Example

```php
<?php

$snmp = new SNMP(SNMP::VERSION_2c, '[::1', 'public');

?>
```

## Literal Examples
+ SNMP::__construct(): Argument #2 ($hostname) has a malformed IPv6 address, closing square bracket missing

## Alternatives
+ Make sure a bracketed IPv6 ``$hostname`` is properly closed, e.g. ``[::1]`` or ``[::1]:1161``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, this emitted an E_WARNING ("Malformed IPv6 address, closing square bracket missing") and left the SNMP object without a usable session, instead of throwing.](Previously, this emitted an E_WARNING ("Malformed IPv6 address, closing square bracket missing") and left the SNMP object without a usable session, instead of throwing.)