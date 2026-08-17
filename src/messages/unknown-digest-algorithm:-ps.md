# Unknown digest algorithm: %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-digest-algorithm:-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-digest-algorithm:-ps.html","name":"Unknown digest algorithm: %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-07-13T20:51:12+02:00","dateModified":"2026-07-13T20:51:12+02:00","description":"The digest algorithm name passed to a hash function is not recognized by PHP's Hash extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/unknown-digest-algorithm:-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The digest algorithm name passed to a hash function is not recognized by PHP's Hash extension.

The hash(), hash_file(), and hash_hmac() functions rely on a registry of supported algorithms. When an algorithm name is not found in that registry, this warning is emitted and the function returns false.

The list of available algorithms depends on the extensions loaded at runtime. Algorithms may be added or removed depending on the PHP version and compiled extensions.

Algorithms are case-insensitive, but misspellings will still produce this error.

## Example

```php
<?php

// hash() with a valid algorithm works
hash('sha256', 'my data');

// hash() with an unknown algorithm triggers the warning
hash('unknown_algo', 'my data');

// hash_file() also triggers it
hash_file('bad_algo', '/tmp/file.txt');

// hash_hmac() too
hash_hmac('invalid', 'my data', 'secret');

?>
```

## Literal Examples
+ Unknown digest algorithm: blowfish
+ Unknown digest algorithm: tiger
+ Unknown digest algorithm: sha3-224

## Alternatives
+ Check available algorithms with hash_algos() before using one.
+ Use one of the standard algorithms: md5, sha1, sha256, sha512, sha3-256.
+ Verify the algorithm is available by checking in_array($algo, hash_algos()).
+ Install or enable the required extension that provides the algorithm (e.g. hash with GOST support).

## Related error messages
+ [hash_algos](https://www.php.net/manual/en/function.hash-algos.php)
+ [hash](https://www.php.net/manual/en/function.hash.php)
+ [hash_file](https://www.php.net/manual/en/function.hash-file.php)
+ [hash_hmac](https://www.php.net/manual/en/function.hash-hmac.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()