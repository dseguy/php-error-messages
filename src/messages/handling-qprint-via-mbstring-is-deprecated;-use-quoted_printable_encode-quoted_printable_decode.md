# Handling QPrint via mbstring is deprecated; use quoted_printable_encode/quoted_printable_decode

## Description
Since PHP 8.2, several encodings were dropped from mbstring, including `QPrint`. 

This is a deprecation, so the feature is available until PHP 9.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html","name":"Handling QPrint via mbstring is deprecated; use quoted_printable_encode\/quoted_printable_decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"Since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/handling-qprint-via-mbstring-is-deprecated;-use-quoted_printable_encode-quoted_printable_decode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

mb_convert_encoding('foo', 'qprint');

?>
```

## Alternatives
+ It is recommended to use the ``quoted_printable_encode()`` and ``quoted_printable_decode()`` functions to do this.

## Related error messages
+ [handling-base64-via-mbstring-is-deprecated;-use-base64_encode-base64_decode-instead](asdf)
+ [handling-html-entities-via-mbstring-is-deprecated;-use-htmlspecialchars,-htmlentities,-or-mb_encode_numericentity-mb_decode_numericentity](asdf)
+ [handling-uuencode-via-mbstring-is-deprecated;-use-convert_uuencode-convert_uudecode-instead](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[mb_convert_encoding](mb_convert_encoding)