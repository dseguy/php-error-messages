# Wrong encoding, conversion from "%s" to "%s" is not allowed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/wrong-encoding,-conversion-from-ps-to-ps-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/wrong-encoding,-conversion-from-ps-to-ps-is-not-allowed.html","name":"Wrong encoding, conversion from \"%s\" to \"%s\" is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-16T17:19:36+00:00","dateModified":"2026-08-16T17:19:36+00:00","description":"This message reports that the origin or the destination encoding when calling ``iconv()`` is not supported on this server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/wrong-encoding,-conversion-from-ps-to-ps-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This message reports that the origin or the destination encoding when calling `iconv()` is not supported on this server. It might be a typo in the encoding name, or an uninstalled encoding on the system. Note that lower case and uppercase do not matter.

## Example

```php
<?php

$string = iconv('utf-8', 'not-an-encoding', $source);

?>
```

## Literal Examples
+ Wrong encoding, conversion from "utf-8" to "utf-9" is not allowed
+ Wrong encoding, conversion from "bag5" to "utf-8" is not allowed

## Alternatives
+ Check the names of the encodings for typos.
+ Check the installed encodings on the system.
+ Check the encodings actually exist.
