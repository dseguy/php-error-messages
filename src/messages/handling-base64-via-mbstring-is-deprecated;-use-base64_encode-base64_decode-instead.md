# Handling Base64 via mbstring is deprecated; use base64_encode/base64_decode instead

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead.html","name":"Handling Base64 via mbstring is deprecated; use base64_encode\/base64_decode instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2025-01-16T12:25:09+01:00","dateModified":"2026-08-17T16:24:13+02:00","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.2, several encodings were dropped from mbstring, including `base64`. 

This is a deprecation, so the feature is available until PHP 9.

## Example

```php
<?php

mb_convert_encoding('foo', 'base64');

?>
```

## Alternatives
+ It is recommended to use the ``base64_encode()`` and ``base64_decode()`` functions to do this.

## Related error messages
+ [handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead](handling-uuencode-via-mbstring-is-deprecated;-use-convert\_uuencode-convert\_uudecode-instead.html)
+ [handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity-instead](handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb\_encode\_numericentity-mb\_decode\_numericentity-instead.html)
+ [handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity](handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb\_encode\_numericentity-mb\_decode\_numericentity.html)
+ [handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode-instead](handling-qprint-via-mbstring-is-deprecated;-use-quoted\_printable\_encode-quoted\_printable\_decode-instead.html)
+ [handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode](handling-qprint-via-mbstring-is-deprecated;-use-quoted\_printable\_encode-quoted\_printable\_decode.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_convert_encoding](mb_convert_encoding)