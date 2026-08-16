# Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html","name":"Handling QPrint via mbstring is deprecated; use quoted_printable_encode\/quoted_printable_decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
Since PHP 8.2, several encodings were dropped from mbstring, including `QPrint`. 

This is a deprecation, so the feature is available until PHP 9.

## Example

```php
<?php

mb_convert_encoding('foo', 'qprint');

?>
```

## Alternatives
+ It is recommended to use the ``quoted_printable_encode()`` and ``quoted_printable_decode()`` functions to do this.

## Related error messages
+ [handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead](handling-base64-via-mbstring-is-deprecated;-use-base64\_encode-base64\_decode-instead.html)
+ [handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity](handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb\_encode\_numericentity-mb\_decode\_numericentity.html)
+ [handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead](handling-uuencode-via-mbstring-is-deprecated;-use-convert\_uuencode-convert\_uudecode-instead.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_convert_encoding](mb_convert_encoding)