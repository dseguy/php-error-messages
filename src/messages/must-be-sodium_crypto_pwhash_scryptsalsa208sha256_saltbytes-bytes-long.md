# must be SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES bytes long

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-sodium_crypto_pwhash_scryptsalsa208sha256_saltbytes-bytes-long.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-sodium_crypto_pwhash_scryptsalsa208sha256_saltbytes-bytes-long.html","name":"must be SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES bytes long","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-10-09T14:09:10+00:00","dateModified":"2026-10-09T14:09:10+00:00","description":"``sodium_crypto_pwhash_scryptsalsa208sha256()`` derives a key from a password using the scrypt algorithm, and it needs a salt as its third argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-sodium_crypto_pwhash_scryptsalsa208sha256_saltbytes-bytes-long.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`sodium_crypto_pwhash_scryptsalsa208sha256()` derives a key from a password using the scrypt algorithm, and it needs a salt as its third argument. The salt must be exactly `SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES` bytes long, which is 32 bytes. Any other length throws a `SodiumException`.

This constant is different from `SODIUM_CRYPTO_PWHASH_SALTBYTES`, which is used by `sodium_crypto_pwhash()`. A salt that works with one function does not necessarily work with the other.

The salt should be random and unique for each password. Generate it with `random_bytes(SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES)`, and store it with the derived key.

## Example

```php
<?php

// The salt must be exactly SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES (32) bytes long
$key = sodium_crypto_pwhash_scryptsalsa208sha256(
    16,
    'password',
    'short',
    SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE,
    SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE
);

?>
```

## Literal Examples
+ sodium_crypto_pwhash_scryptsalsa208sha256(): Argument #3 ($salt) must be SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES bytes long

## Alternatives
+ Generate the salt with ``random_bytes(SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES)``, so its length always matches.
+ Check that the constant matches the function: use ``SODIUM_CRYPTO_PWHASH_SALTBYTES`` with ``sodium_crypto_pwhash()``, and this constant with ``sodium_crypto_pwhash_scryptsalsa208sha256()``.

## Related error messages
+ [must-be-sodium_crypto_pwhash_saltbytes-bytes-long](must-be-sodium\_crypto\_pwhash\_saltbytes-bytes-long.html)

## Related error messages
+ [sodium_crypto_pwhash_scryptsalsa208sha256](https://www.php.net/manual/en/function.sodium-crypto-pwhash-scryptsalsa208sha256.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()