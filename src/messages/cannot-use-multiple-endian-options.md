# cannot use multiple endian options

## Description
The third option of `gmp_import()` must be either `GMP_BIG_ENDIAN`, `GMP_NATIVE_ENDIAN` or `GMP_LITTLE_ENDIAN`, but not at the same time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-multiple-endian-options.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-multiple-endian-options.html","name":"cannot use multiple endian options","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The third option of ``gmp_import()`` must be either ``GMP_BIG_ENDIAN``, ``GMP_NATIVE_ENDIAN`` or ``GMP_LITTLE_ENDIAN``, but not at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/cannot-use-multiple-endian-options.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php
gmp_import('a', 1, GMP_BIG_ENDIAN | GMP_LITTLE_ENDIAN);
?>
```

## Literal Examples
+ gmp_import(): Argument #3 ($flags) cannot use multiple word order options

## Alternatives
+ Use the ``GMP_NATIVE_ENDIAN``.
+ Use the ``GMP_BIG_ENDIAN``.
+ Use the ``GMP_LITTLE_ENDIAN``.
+ Use the default option, by omitting this argument (default is ``GMP_NATIVE_ENDIAN``).

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()