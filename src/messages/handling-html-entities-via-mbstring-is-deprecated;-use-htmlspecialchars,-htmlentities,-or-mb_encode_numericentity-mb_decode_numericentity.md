# Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity/mb_decode_numericentity

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity.html","name":"Handling HTML entities via mbstring is deprecated; use htmlspecialchars, htmlentities, or mb_encode_numericentity\/mb_decode_numericentity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-16T12:25:09+01:00","dateModified":"2025-09-21T18:39:13+02:00","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.2, several encodings were dropped from mbstring, including `html`. 

This is a deprecation, so the feature is available until PHP 9.

## Example

```php
<?php

mb_convert_encoding('foo', 'html');

?>
```

## Alternatives
+ It is recommended to use the ``htmlspecialchars()``, ``htmlentities()``, ``mb_encode_numericentity()``, ``mb_decode_numericentity()`` functions to do this.

## Related error messages
+ [handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead](handling-base64-via-mbstring-is-deprecated;-use-base64\_encode-base64\_decode-instead.html)
+ [handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode](handling-qprint-via-mbstring-is-deprecated;-use-quoted\_printable\_encode-quoted\_printable\_decode.html)
+ [handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead](handling-uuencode-via-mbstring-is-deprecated;-use-convert\_uuencode-convert\_uudecode-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_convert_encoding](mb_convert_encoding)