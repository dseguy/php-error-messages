# must have a length less than or equal to %u

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-have-a-length-less-than-or-equal-to-pu.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-have-a-length-less-than-or-equal-to-pu.html","name":"must have a length less than or equal to %u","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-24T22:28:02+02:00","dateModified":"2026-08-24T22:28:02+02:00","description":"``bzdecompress()`` hands its input off to libbzip2, which tracks buffer sizes in a 32-bit unsigned integer internally","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-have-a-length-less-than-or-equal-to-pu.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`bzdecompress()` hands its input off to libbzip2, which tracks buffer sizes in a 32-bit unsigned integer internally. A `$data` string of `4294967296` bytes (`2^32`) or more cannot be represented by that counter and would silently overflow.

As of PHP 8.6, `bzdecompress()` rejects oversized input up front with a `ValueError`, instead of risking an integer overflow while decompressing it.

## Example

```php
<?php

$data = str_repeat('a', 4294967296);

bzdecompress($data);

?>
```

## Literal Examples
+ bzdecompress(): Argument #1 ($source) must have a length less than or equal to 4294967295

## Alternatives
+ Do not pass strings close to or larger than 4 GB to ``bzdecompress()``; decompress the data in smaller chunks instead if possible.

## Related error messages
+ [must-be-less-than-4294967295-bytes](must-be-less-than-4294967295-bytes.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Previously, oversized input could trigger an unsigned integer overflow inside bzdecompress() instead of being rejected.](Previously, oversized input could trigger an unsigned integer overflow inside bzdecompress() instead of being rejected.)