# must be less than 4294967295 bytes

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-less-than-4294967295-bytes.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-less-than-4294967295-bytes.html","name":"must be less than 4294967295 bytes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T15:48:00+02:00","dateModified":"2026-08-24T15:48:00+02:00","description":"``sodium_crypto_pwhash()`` and ``sodium_crypto_pwhash_str()`` derive a key, or a storable hash, from a password using the Argon2 algorithm","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-less-than-4294967295-bytes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`sodium_crypto_pwhash()` and `sodium_crypto_pwhash_str()` derive a key, or a storable hash, from a password using the Argon2 algorithm. Internally, libsodium tracks the length of the password (and of the derived key or salt) in a 32-bit unsigned integer, so any input of `4294967295` bytes (`2^32 - 1`) or more cannot be represented and can never be processed.

As of PHP 8.6, these out-of-range length checks throw a `ValueError` naming the offending argument. Earlier versions threw a generic `SodiumException` instead for the same underlying condition.

## Example

```php
<?php

$hash = sodium_crypto_pwhash_str(str_repeat('a', 4294967295), SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE, SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE);

?>
```

## Literal Examples
+ sodium_crypto_pwhash_str(): Argument #1 ($password) must be less than 4294967295 bytes

## Alternatives
+ Do not pass passwords, salts or derived keys anywhere near 4 GB in size; hash a digest of the material instead if it is genuinely that large.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()