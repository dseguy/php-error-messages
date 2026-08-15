# Use of mbstring.internal_encoding is deprecated

## Description
`mbstring.internal_encoding` used to set the default encoding assumed by mbstring functions when no explicit encoding argument is given (e.g. `mb_strlen($str)`).

This mechanism predates, and overlaps with, the language-level `default_charset` directive, which mbstring functions now fall back to when their own internal encoding has not been set explicitly at runtime via `mb_internal_encoding()`. Having two separate configuration surfaces for the same concern is a frequent source of confusion. `mbstring.internal_encoding` has been deprecated since PHP 5.6.0, though the deprecation notice is only emitted when the directive is actually set.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-mbstring.internal_encoding-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-mbstring.internal_encoding-is-deprecated.html","name":"Use of mbstring.internal_encoding is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:28 +0000","dateModified":"Tue, 11 Aug 2026 20:56:28 +0000","description":"``mbstring","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-mbstring.internal_encoding-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

ini_set('mbstring.internal_encoding', 'UTF-8');

?>
```

## Alternatives
+ Use the ``default_charset`` INI directive instead of ``mbstring.internal_encoding``.
+ Call ``mb_internal_encoding()`` at runtime if a specific encoding must be set programmatically.

## Related error messages
+ [use-of-mbstring.http_input-is-deprecated](use-of-mbstring.http\_input-is-deprecated.html)
+ [use-of-mbstring.http_output-is-deprecated](use-of-mbstring.http\_output-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`use-of-mbstring.http_output-is-deprecated`.