# Use of mbstring.http_output is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-mbstring.http_output-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-mbstring.http_output-is-deprecated.html","name":"Use of mbstring.http_output is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:56:22 +0000","dateModified":"Tue, 11 Aug 2026 20:56:22 +0000","description":"``mbstring","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/use-of-mbstring.http_output-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`mbstring.http_output` used to tell the mbstring extension which encoding to convert outgoing HTTP response data to, so it could transparently re-encode output (in combination with `mbstring.encoding_translation` and the `mb_output_handler` output buffer handler).

This mechanism predates, and overlaps with, the language-level `output_encoding` directive, and having two separate configuration surfaces for the same concern is a frequent source of confusion. `mbstring.http_output` has been deprecated since PHP 5.6.0, though the deprecation notice is only emitted when the directive is actually set.

## Example

```php
<?php

ini_set('mbstring.http_output', 'UTF-8');

?>
```

## Alternatives
+ Use the ``output_encoding`` INI directive instead of ``mbstring.http_output``.

## Related error messages
+ [use-of-mbstring.http_input-is-deprecated](use-of-mbstring.http\_input-is-deprecated.html)
+ [use-of-mbstring.internal_encoding-is-deprecated](use-of-mbstring.internal\_encoding-is-deprecated.html)

In previous PHP versions, this error message used to be :ref:`use-of-mbstring.http_input-is-deprecated`.
In more recent PHP versions, this error message is now :ref:`use-of-mbstring.internal_encoding-is-deprecated`.