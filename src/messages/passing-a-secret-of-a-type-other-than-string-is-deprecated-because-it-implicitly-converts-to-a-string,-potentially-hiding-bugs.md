# Passing a secret of a type other than string is deprecated because it implicitly converts to a string, potentially hiding bugs

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs.html","name":"Passing a secret of a type other than string is deprecated because it implicitly converts to a string, potentially hiding bugs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:04:57+00:00","dateModified":"2026-09-24T07:04:57+00:00","description":"The ``xxh3`` and ``xxh128`` hashing algorithms accept an optional ``'secret'`` entry in the options array passed to ``hash()``\/``hash_init()``, used instead of a plain integer seed to initialize the hash","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/passing-a-secret-of-a-type-other-than-string-is-deprecated-because-it-implicitly-converts-to-a-string,-potentially-hiding-bugs.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `xxh3` and `xxh128` hashing algorithms accept an optional `'secret'` entry in the options array passed to `hash()`/`hash_init()`, used instead of a plain integer seed to initialize the hash. It is documented as a `string`, but PHP did not previously enforce that: any other type was silently converted with an implicit `(string)` cast, so a programmer who passed, say, an `int` would get a working-looking hash computed from an unintended value, with no indication anything was wrong.

As of PHP 8.4, passing a non-string 'secret' emits this deprecation notice before the implicit conversion happens, so the mistake is no longer silent. A future version is expected to throw a `ValueError` instead.

## Example

```php
<?php

try {
    // 'secret' is documented as a string; passing an int silently
    // converts it with (string) instead of being used as given.
    hash('xxh3', 'some data', false, ['secret' => 12345]);
} catch (\Throwable $e) {
    // xxh3 also requires the secret to be at least 136 bytes long once
    // converted to a string -- unrelated to the type deprecation itself.
}

?>
```

## Literal Examples
+ hash(): Passing a secret of a type other than string is deprecated because it implicitly converts to a string, potentially hiding bugs

## Alternatives
+ Pass a string directly for 'secret', e.g. a value produced by random_bytes().
+ If the value naturally isn't a string, convert it explicitly and document why, e.g. ['secret' => (string) $value].
+ Use the 'seed' option (an int) instead of 'secret' when a full custom secret is not actually needed.

## Related error messages
+ [passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored](passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-ignored.html)
+ [passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0](passing-a-seed-of-a-type-other-than-int-is-deprecated-because-it-is-the-same-as-setting-the-seed-to-0.html)

## Related error messages
+ [PHP RFC: Deprecations for PHP 8.4](https://wiki.php.net/rfc/deprecations_php_8_4)
+ [hash manual](https://www.php.net/manual/en/function.hash.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()