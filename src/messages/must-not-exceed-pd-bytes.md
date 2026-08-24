# must not exceed %d bytes

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-exceed-pd-bytes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-exceed-pd-bytes.html","name":"must not exceed %d bytes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-not-exceed-pd-bytes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces `Openssl\Psk`, which holds a pre-shared key (and an optional identity) used to authenticate TLS connections without a certificate. OpenSSL itself imposes fixed limits on both fields: a PSK cannot exceed `Openssl\Psk::MAX_PSK_LEN` (256) bytes, and an identity cannot exceed `Openssl\Psk::MAX_IDENTITY_LEN` (128) bytes.

Passing a longer string to `Openssl\Psk::__construct()` throws a `ValueError` for the offending argument instead of silently truncating the key or identity.

## Example

```php
<?php

$psk = new Openssl\Psk(str_repeat('a', 300));

?>
```

## Literal Examples
+ Openssl\Psk::__construct(): Argument #1 ($psk) must not exceed 256 bytes

## Alternatives
+ Keep the pre-shared key to 256 bytes or fewer, and the identity to 128 bytes or fewer.
+ Use ``Openssl\Psk::MAX_PSK_LEN`` and ``Openssl\Psk::MAX_IDENTITY_LEN`` to validate lengths before constructing the object.

## Related error messages
+ [must-be-openssl_encoding_der-or-openssl_encoding_pem](must-be-openssl\_encoding\_der-or-openssl\_encoding\_pem.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()