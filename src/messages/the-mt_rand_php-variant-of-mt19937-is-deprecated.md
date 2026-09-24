# The MT_RAND_PHP variant of Mt19937 is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-mt_rand_php-variant-of-mt19937-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-mt_rand_php-variant-of-mt19937-is-deprecated.html","name":"The MT_RAND_PHP variant of Mt19937 is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-23T17:15:41+02:00","dateModified":"2026-09-23T17:15:41+02:00","description":"``Random\\Engine\\Mt19937`` (and the legacy ``mt_srand()``\/``mt_rand()`` functions) support two variants of the Mersenne Twister algorithm, selected via the ``$mode`` argument: ``MT_RAND_MT19937``, the correct, standard implementation, and ``MT_RAND_PHP``, a non-standard variant kept only for backward compatibility with PHP's own ``mt_rand()`` behaviour prior to PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-mt_rand_php-variant-of-mt19937-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Random\Engine\Mt19937` (and the legacy `mt_srand()`/`mt_rand()` functions) support two variants of the Mersenne Twister algorithm, selected via the `$mode` argument: `MT_RAND_MT19937`, the correct, standard implementation, and `MT_RAND_PHP`, a non-standard variant kept only for backward compatibility with PHP's own `mt_rand()` behaviour prior to PHP 7.1. `MT_RAND_PHP` uses a biased scaling algorithm and, before PHP 8.2, exhibited undefined behaviour for some seed values.

As of PHP 8.3, constructing an engine (or seeding the legacy PRNG) with `MT_RAND_PHP` emits this deprecation notice; the special-cased, non-standard variant exists purely to reproduce historical output and should not be used in new code.

## Example

```php
<?php

// MT_RAND_PHP selects PHP's own historical, biased reimplementation
// of the Mersenne Twister instead of the correct, standard one.
$engine = new Random\Engine\Mt19937(1234, MT_RAND_PHP);
$randomizer = new Random\Randomizer($engine);

var_dump($randomizer->getInt(0, 100));

?>
```

## Alternatives
+ Use MT_RAND_MT19937 (or simply omit the $mode argument, since it is the default) to get the correct, standard Mersenne Twister implementation.
+ For new code, prefer a modern engine such as Random\Engine\Secure via the Random\Randomizer API instead of seeding Mt19937 manually.
+ Only keep MT_RAND_PHP where reproducing PHP's historical, legacy random sequence bit-for-bit is an explicit requirement.

## Related error messages
+ [Random\\Engine\\Mt19937::__construct](https://www.php.net/manual/en/random-engine-mt19937.construct.php)
+ [mt_srand](https://www.php.net/manual/en/function.mt-srand.php)
+ [PHP RFC: Deprecations for PHP 8.3](https://wiki.php.net/rfc/deprecations_php_8_3)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()