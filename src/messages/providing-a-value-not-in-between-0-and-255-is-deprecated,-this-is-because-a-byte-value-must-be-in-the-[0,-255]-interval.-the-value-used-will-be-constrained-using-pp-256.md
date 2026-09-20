# Providing a value not in-between 0 and 255 is deprecated, this is because a byte value must be in the [0, 255] interval. The value used will be constrained using %% 256

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-a-value-not-in-between-0-and-255-is-deprecated,-this-is-because-a-byte-value-must-be-in-the-[0,-255]-interval.-the-value-used-will-be-constrained-using-pp-256.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-a-value-not-in-between-0-and-255-is-deprecated,-this-is-because-a-byte-value-must-be-in-the-[0,-255]-interval.-the-value-used-will-be-constrained-using-pp-256.html","name":"Providing a value not in-between 0 and 255 is deprecated, this is because a byte value must be in the [0, 255] interval. The value used will be constrained using %% 256","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:44:17+00:00","dateModified":"2026-09-20T20:44:17+00:00","description":"``chr()`` builds a one-character string from an integer code point, but a string byte can only hold a value between 0 and 255","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/providing-a-value-not-in-between-0-and-255-is-deprecated,-this-is-because-a-byte-value-must-be-in-the-[0,-255]-interval.-the-value-used-will-be-constrained-using-pp-256.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`chr()` builds a one-character string from an integer code point, but a string byte can only hold a value between 0 and 255. Historically, `chr()` accepted any `int` and silently wrapped out-of-range values by computing `value %% 256`, so `chr(256)` quietly produced the same byte as `chr(0)`. This is almost always the sign of an arithmetic mistake upstream (an off-by-one, a missing modulo, a value that was never validated).

As of PHP 8.5, calling `chr()` with a value outside the `[0, 255]` interval emits this deprecation notice. The returned byte is unchanged -- PHP still applies `%% 256` to constrain the value -- so existing output is not affected, but code should stop relying on the implicit wrap.

## Example

```php
<?php

// A byte can only hold a value in [0, 255]; anything outside
// that range was silently wrapped with % 256.
echo chr(256);  // same as chr(0)
echo chr(-1);   // same as chr(255)

?>
```

## Literal Examples
+ chr(): Providing a value not in-between 0 and 255 is deprecated, this is because a byte value must be in the [0, 255] interval. The value used will be constrained using %% 256

## Alternatives
+ Apply the modulo explicitly before calling chr(), e.g. chr($value %% 256), so the intent is documented and the notice is silenced.
+ Validate the value is already within [0, 255] before calling chr(), and handle out-of-range input as an error instead of wrapping it.
+ If you are building a UTF-8 string from a code point rather than a raw byte, use mb_chr() instead of chr().

## Related error messages
+ [chr](https://www.php.net/manual/en/function.chr.php)
+ [mb_chr](https://www.php.net/manual/en/function.mb-chr.php)
+ [PHP RFC: Deprecations for PHP 8.5](https://wiki.php.net/rfc/deprecations_php_8_5)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()