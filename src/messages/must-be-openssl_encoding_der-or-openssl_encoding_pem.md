# must be OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-openssl_encoding_der-or-openssl_encoding_pem.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-openssl_encoding_der-or-openssl_encoding_pem.html","name":"must be OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T12:54:48+00:00","dateModified":"2026-08-24T12:54:48+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-openssl_encoding_der-or-openssl_encoding_pem.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 introduces `Openssl\Session`, a class representing a TLS session that can be exported and later re-imported to resume a connection without a full handshake. Both `Openssl\Session::export()` and the static `Openssl\Session::import()` take a `$format` argument describing how the session data is encoded, but only two encodings are supported: `OPENSSL_ENCODING_DER` and `OPENSSL_ENCODING_PEM`.

Passing any other integer as the format raises a `ValueError`, since there is no other encoding these methods know how to produce or parse.

## Example

```php
<?php

$session = Openssl\Session::import('previously-exported-session-data', 999);

?>
```

## Literal Examples
+ Openssl\Session::import(): Argument #2 ($format) must be OPENSSL_ENCODING_DER or OPENSSL_ENCODING_PEM

## Alternatives
+ Pass either ``OPENSSL_ENCODING_DER`` or ``OPENSSL_ENCODING_PEM`` as the ``$format`` argument to ``Openssl\Session::export()`` or ``Openssl\Session::import()``.

## Related error messages
+ [must-not-exceed-%d-bytes](must-not-exceed-%d-bytes.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()