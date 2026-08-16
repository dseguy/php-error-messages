# Security level must be one of "noAuthNoPriv", "authNoPriv", or "authPriv"

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/security-level-must-be-one-of-\"noauthnopriv\",-\"authnopriv\",-or-\"authpriv.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/security-level-must-be-one-of-\"noauthnopriv\",-\"authnopriv\",-or-\"authpriv.html","name":"Security level must be one of \"noAuthNoPriv\", \"authNoPriv\", or \"authPriv\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The third argument of snmp3_get() must be one of the following values, \"noAuthNoPriv\", \"authNoPriv\", or \"authPriv\"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/security-level-must-be-one-of-\"noauthnopriv\",-\"authnopriv\",-or-\"authpriv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The third argument of snmp3_get() must be one of the following values, "noAuthNoPriv", "authNoPriv", or "authPriv". Case is important. There are not constants to for these values.

## Example

```php
<?php

try {
    var_dump(snmp3_get($hostname, $community, '', '', '', '', '', '.1.3.6.1.2.1.1.1.0'));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

?>
```

## Alternatives
+ Use one of the three possible values.
