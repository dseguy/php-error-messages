# Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity-instead.html","name":"Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity\/mb_decode_numericentity instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.2, several pseudo-encodings were dropped from mbstring, including `HTML-ENTITIES`, which converted characters to and from their HTML numeric/named entity representation.

This functionality overlapped with dedicated, better-maintained functions, and its removal simplifies the mbstring encoding conversion tables. It remains usable until PHP 9, when it will be removed entirely.

## Example

```php
<?php

mb_convert_encoding('foo', 'HTML-ENTITIES');

?>
```

## Alternatives
+ Use ``htmlspecialchars()`` or ``htmlentities()`` to encode text as HTML entities.
+ Use ``mb_encode_numericentity()``/``mb_decode_numericentity()`` for numeric entity conversion.

## Related error messages
+ [handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead](handling-qprint-via-mbstring-is-deprecated;-use-quoted\_printable\_encode-quoted\_printable\_decode-instead.html)
+ [handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead](handling-base64-via-mbstring-is-deprecated;-use-base64\_encode-base64\_decode-instead.html)
+ [handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead](handling-uuencode-via-mbstring-is-deprecated;-use-convert\_uuencode-convert\_uudecode-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_convert_encoding](mb_convert_encoding)