# Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead.html","name":"Handling QPrint via mbstring is deprecated; use quoted_printable_encode\/quoted_printable_decode instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.2, several pseudo-encodings were dropped from mbstring, including `qprint` (Quoted-Printable), a text encoding that represents non-ASCII bytes using `=XX` sequences.

This functionality overlapped with the dedicated `quoted_printable_encode()`/`quoted_printable_decode()` functions provided by the standard extension. It remains usable until PHP 9, when it will be removed entirely.

## Example

```php
<?php

mb_convert_encoding('foo', 'qprint');

?>
```

## Alternatives
+ Use ``quoted_printable_encode()`` and ``quoted_printable_decode()`` instead of ``mb_convert_encoding()`` with the ``qprint`` encoding.

## Related error messages
+ [handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity-instead](handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb\_encode\_numericentity-mb\_decode\_numericentity-instead.html)
+ [handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead](handling-base64-via-mbstring-is-deprecated;-use-base64\_encode-base64\_decode-instead.html)
+ [handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead](handling-uuencode-via-mbstring-is-deprecated;-use-convert\_uuencode-convert\_uudecode-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_convert_encoding](mb_convert_encoding)