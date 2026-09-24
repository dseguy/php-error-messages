# Use of iconv.internal_encoding is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-iconv.internal_encoding-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-iconv.internal_encoding-is-deprecated.html","name":"Use of iconv.internal_encoding is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:08:09+00:00","dateModified":"2026-09-24T07:08:09+00:00","description":"``iconv","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-iconv.internal_encoding-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`iconv.internal_encoding` used to control the encoding the `iconv_*()` functions assumed for strings when no encoding was given explicitly, alongside the separate, more general `mbstring.internal_encoding`/`mbstring.language` and the character encoding used when generating output. Having several overlapping encoding-related INI settings, each affecting only part of the request, was a frequent source of mismatched-encoding bugs.

As of PHP 5.6, setting `iconv.internal_encoding` (whether in php.ini or via `ini_set()`/`iconv_set_encoding()`) emits this deprecation notice; the single, extension-agnostic `default_charset` setting should be used instead.

## Example

```php
<?php

ini_set('iconv.internal_encoding', 'UTF-8');

?>
```

## Literal Examples
+ ini_set(): Use of iconv.internal_encoding is deprecated
+ iconv_set_encoding(): Use of iconv.internal_encoding is deprecated

## Alternatives
+ Leave iconv.internal_encoding unset and rely on default_charset instead.
+ Pass the encoding explicitly to each iconv_*() call rather than relying on any implicit internal encoding.

## Related error messages
+ [use-of-iconv.input_encoding-is-deprecated](use-of-iconv.input\_encoding-is-deprecated.html)
+ [use-of-iconv.output_encoding-is-deprecated](use-of-iconv.output\_encoding-is-deprecated.html)

## Related error messages
+ [default_charset manual](https://www.php.net/manual/en/ini.core.php#ini.default-charset)
+ [iconv runtime configuration manual](https://www.php.net/manual/en/iconv.configuration.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()