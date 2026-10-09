# Use of iconv.output_encoding is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-iconv.output_encoding-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-iconv.output_encoding-is-deprecated.html","name":"Use of iconv.output_encoding is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T09:11:08+02:00","dateModified":"2026-09-24T09:11:08+02:00","description":"``iconv","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-iconv.output_encoding-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`iconv.output_encoding` used to tell PHP which encoding to convert output into, via the iconv extension's own output handler. Having several overlapping encoding-related INI settings, each affecting only part of the request, was a frequent source of mismatched-encoding bugs.

As of PHP 5.6, setting `iconv.output_encoding` (whether in php.ini or via `ini_set()`/`iconv_set_encoding()`) emits this deprecation notice; the single, extension-agnostic `default_charset` setting should be used instead.

## Example

```php
<?php

ini_set('iconv.output_encoding', 'UTF-8');

?>
```

## Literal Examples
+ ini_set(): Use of iconv.output_encoding is deprecated
+ iconv_set_encoding(): Use of iconv.output_encoding is deprecated

## Alternatives
+ Leave iconv.output_encoding unset and rely on default_charset instead.
+ Convert generated output explicitly with iconv() where a specific output encoding must be guaranteed.

## Related error messages
+ [use-of-iconv.internal_encoding-is-deprecated](use-of-iconv.internal\_encoding-is-deprecated.html)
+ [use-of-iconv.input_encoding-is-deprecated](use-of-iconv.input\_encoding-is-deprecated.html)

## Related error messages
+ [default_charset manual](https://www.php.net/manual/en/ini.core.php#ini.default-charset)
+ [iconv runtime configuration manual](https://www.php.net/manual/en/iconv.configuration.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()