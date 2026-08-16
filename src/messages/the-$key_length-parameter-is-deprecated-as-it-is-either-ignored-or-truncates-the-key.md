# the $key_length parameter is deprecated as it is either ignored or truncates the key

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$key_length-parameter-is-deprecated-as-it-is-either-ignored-or-truncates-the-key.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$key_length-parameter-is-deprecated-as-it-is-either-ignored-or-truncates-the-key.html","name":"the $key_length parameter is deprecated as it is either ignored or truncates the key","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:00 +0000","dateModified":"Tue, 11 Aug 2026 20:56:00 +0000","description":"``openssl_pkey_derive()`` computes a shared secret from a private key and a peer's public key (for DH or ECDH key agreement), and accepts an optional ``$key_length`` argument that was documented as controlling the length of the derived secret","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$key_length-parameter-is-deprecated-as-it-is-either-ignored-or-truncates-the-key.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`openssl_pkey_derive()` computes a shared secret from a private key and a peer's public key (for DH or ECDH key agreement), and accepts an optional `$key_length` argument that was documented as controlling the length of the derived secret.

In practice, this parameter is either ignored entirely (when it is larger than or equal to the natural size of the underlying prime/curve) or silently truncates the derived key (when it is smaller), which can give a false sense of control over the output length and lead to weakened, truncated secrets being used unknowingly. As of PHP 8.5.0, passing a value for `$key_length` raises a deprecation notice.

## Example

```php
<?php

$sharedSecret = openssl_pkey_derive($peerPublicKey, $privateKey, 32);

?>
```

## Alternatives
+ Stop passing ``$key_length`` to ``openssl_pkey_derive()``, and if a specific length is required, derive it explicitly from the full secret afterwards (e.g. with a KDF such as ``hash_hkdf()``).

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[openssl_pkey_derive](openssl_pkey_derive)