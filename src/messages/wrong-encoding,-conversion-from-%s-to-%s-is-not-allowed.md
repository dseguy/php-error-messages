# Wrong encoding, conversion from "%s" to "%s" is not allowed

## Description
This message reports that the origin or the destination encoding is not supported on this server. It might be a typo in the encoding name, or an uninstalled encoding on the system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/wrong-encoding,-conversion-from-\"%s\"-to-\"%s\"-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/wrong-encoding,-conversion-from-\"%s\"-to-\"%s\"-is-not-allowed.html","name":"Wrong encoding, conversion from \"%s\" to \"%s\" is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:47 +0000","dateModified":"Tue, 31 Mar 2026 09:10:47 +0000","description":"This message reports that the origin or the destination encoding is not supported on this server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/wrong-encoding,-conversion-from-\"%s\"-to-\"%s\"-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$string = iconv('utf-8', 'not-an-encoding', $source);

?>
```

## Alternatives
+ Check the names of the encodings for typos.
+ Check the installed encodings on the system.
+ Check the encodings actually exist.
