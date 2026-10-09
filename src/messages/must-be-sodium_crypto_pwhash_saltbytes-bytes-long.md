# must be SODIUM_CRYPTO_PWHASH_SALTBYTES bytes long

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-sodium_crypto_pwhash_saltbytes-bytes-long.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-sodium_crypto_pwhash_saltbytes-bytes-long.html","name":"must be SODIUM_CRYPTO_PWHASH_SALTBYTES bytes long","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T14:08:51+00:00","dateModified":"2026-10-09T14:08:51+00:00","description":"``sodium_crypto_pwhash()`` derives a key from a password using Argon2i, and it needs a salt as its third argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-sodium_crypto_pwhash_saltbytes-bytes-long.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`sodium_crypto_pwhash()` derives a key from a password using Argon2i, and it needs a salt as its third argument. The salt must be exactly `SODIUM_CRYPTO_PWHASH_SALTBYTES` bytes long, which is 16 bytes. Any other length throws a `SodiumException`.

The salt should be random and unique for each password. Generate it with `random_bytes(SODIUM_CRYPTO_PWHASH_SALTBYTES)`, and store it next to the derived key, since the same salt is needed to derive the key again.

## Example

```php
<?php

// The salt must be exactly SODIUM_CRYPTO_PWHASH_SALTBYTES (16) bytes long
$key = sodium_crypto_pwhash(
    16,
    'password',
    'short',
    SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
    SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE
);

?>
```

## Literal Examples
+ sodium_crypto_pwhash(): Argument #3 ($salt) must be SODIUM_CRYPTO_PWHASH_SALTBYTES bytes long

## Alternatives
+ Generate the salt with ``random_bytes(SODIUM_CRYPTO_PWHASH_SALTBYTES)``, so its length always matches.
+ If you do not need to manage the salt yourself, use ``sodium_crypto_pwhash_str()``. It creates the salt and stores it inside the returned hash string.

## Related error messages
+ [must-be-sodium_crypto_pwhash_scryptsalsa208sha256_saltbytes-bytes-long](must-be-sodium\_crypto\_pwhash\_scryptsalsa208sha256\_saltbytes-bytes-long.html)

## Related error messages
+ [sodium_crypto_pwhash](https://www.php.net/manual/en/function.sodium-crypto-pwhash.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()