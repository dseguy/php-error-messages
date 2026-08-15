# Security protocol must be one of "DES", "AES128", or "AES E_ERROR

## Description
The fourth argument of `snmp3_get()` must be one of the following values, `DES`, `AES128`, or `AES`. 

The `DES` protocol must be active to see this error message. Otherwise, a distinct message is displayed. 

Case is important. There are not constants to for these values.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/security-protocol-must-be-one-of-\"des\",-\"aes128\",-or-\"aes-e_error.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/security-protocol-must-be-one-of-\"des\",-\"aes128\",-or-\"aes-e_error.html","name":"Security protocol must be one of \"DES\", \"AES128\", or \"AES E_ERROR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The fourth argument of ``snmp3_get()`` must be one of the following values, ``DES``, ``AES128``, or ``AES``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/security-protocol-must-be-one-of-\"des\",-\"aes128\",-or-\"aes-e_error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

try {
    var_dump(snmp3_get($hostname, $community, '', 'protocol', '', '', '', '');
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

?>
```

## Alternatives
+ Use one of the three possible values.

## Related error messages
+ [security-protocol-must-be-one-of-"aes128",-or-"aes-e_error](asdf)
