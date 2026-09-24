# Passing a seed of a type other than int is deprecated because it is ignored

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored.html","name":"Passing a seed of a type other than int is deprecated because it is ignored","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:05:06+00:00","dateModified":"2026-09-24T07:05:06+00:00","description":"The ``xxh3`` and ``xxh128`` algorithms accept an optional ``'seed'`` entry (an ``int``) in the options array passed to ``hash()``\/``hash_init()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `xxh3` and `xxh128` algorithms accept an optional `'seed'` entry (an `int`) in the options array passed to `hash()`/`hash_init()`. Unlike the older `murmur3*`/`xxh32`/`xxh64` algorithms -- where a non-int seed is coerced and effectively becomes `0` -- these two algorithms take a different code path: when `'seed'` is not an `int`, it is simply *ignored altogether*, and neither the seed nor a secret is applied. Code that believes it configured a seed silently gets the plain, unseeded hash instead.

As of PHP 8.4, passing a non-int 'seed' to xxh3/xxh128 emits this deprecation notice so the silent no-op is no longer invisible. A future version is expected to throw a `ValueError` instead.

## Example

```php
<?php

// 'seed' is documented as an int; xxh3 simply ignores it when it
// isn't one, silently falling back to the unseeded, default hash.
var_dump(hash('xxh3', 'some data', false, ['seed' => '1234']));

?>
```

## Literal Examples
+ hash(): Passing a seed of a type other than int is deprecated because it is ignored

## Alternatives
+ Pass an actual int for 'seed', e.g. ['seed' => 1234] rather than a numeric string.
+ Cast the value explicitly if it is computed dynamically: ['seed' => (int) $value].
+ Use 'secret' (a string) instead of 'seed' when more entropy than a single int provides is needed.

## Related error messages
+ [passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0](passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0.html)
+ [passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs](passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs.html)

## Related error messages
+ [PHP RFC: Deprecations for PHP 8.4](https://wiki.php.net/rfc/deprecations_php_8_4)
+ [hash manual](https://www.php.net/manual/en/function.hash.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()