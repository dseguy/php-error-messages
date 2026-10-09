# Passing a seed of a type other than int is deprecated because it is the same as setting the seed to 0

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0.html","name":"Passing a seed of a type other than int is deprecated because it is the same as setting the seed to 0","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T09:11:08+02:00","dateModified":"2026-09-24T09:11:08+02:00","description":"The ``murmur3a``, ``murmur3c``, ``murmur3f``, ``xxh32`` and ``xxh64`` algorithms accept an optional ``'seed'`` entry (an ``int``) in the options array passed to ``hash()``\/``hash_init()``, defaulting to ``0`` when not given","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `murmur3a`, `murmur3c`, `murmur3f`, `xxh32` and `xxh64` algorithms accept an optional `'seed'` entry (an `int`) in the options array passed to `hash()`/`hash_init()`, defaulting to `0` when not given. When a non-int value is passed, these algorithms' code checks the type, finds it isn't an int, and simply falls through without ever assigning it -- leaving the seed at its already-initialized default of `0`. The visible effect is identical to never having passed `'seed'` at all, which is easy to miss since no error was raised.

As of PHP 8.4, passing a non-int 'seed' to one of these algorithms emits this deprecation notice. Note that `xxh3`/`xxh128` take a related but distinct code path for the same mistake, documented separately since their non-int seed is *ignored* rather than treated as `0` (the two happen to behave the same when the intended seed actually was `0`, but not otherwise).

## Example

```php
<?php

// 'seed' is documented as an int; murmur3a treats anything else as
// though 'seed' had simply been left at its default, 0.
var_dump(hash('murmur3a', 'some data', false, ['seed' => '1234']));
var_dump(hash('murmur3a', 'some data', false, ['seed' => 0]));
// the two lines above produce the exact same hash

?>
```

## Literal Examples
+ hash(): Passing a seed of a type other than int is deprecated because it is the same as setting the seed to 0

## Alternatives
+ Pass an actual int for 'seed', e.g. ['seed' => 1234] rather than a numeric string.
+ Cast the value explicitly if it is computed dynamically: ['seed' => (int) $value].
+ If a seed of 0 was genuinely intended, pass ['seed' => 0] explicitly instead of relying on a mistyped value falling back to it.

## Related error messages
+ [passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored](passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored.html)
+ [passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs](passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs.html)

## Related error messages
+ [PHP RFC: Deprecations for PHP 8.4](https://wiki.php.net/rfc/deprecations_php_8_4)
+ [hash manual](https://www.php.net/manual/en/function.hash.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()