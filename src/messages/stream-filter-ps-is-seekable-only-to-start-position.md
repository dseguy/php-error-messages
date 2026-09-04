# Stream filter %s is seekable only to start position

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-ps-is-seekable-only-to-start-position.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-ps-is-seekable-only-to-start-position.html","name":"Stream filter %s is seekable only to start position","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-30T11:59:47+02:00","dateModified":"2026-08-30T11:59:47+02:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-ps-is-seekable-only-to-start-position.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 fixes a long-standing inconsistency (bug #49874) between `fseek()`/`ftell()` and stream filters: seeking a stream now checks whether every filter attached to the affected chain can actually tolerate the requested seek, instead of blindly repositioning the stream.

Reading through a decompression filter such as `zlib.inflate` (which `zlib.deflate` also uses on its read side) can always be restarted from position 0, since that simply means decompressing the underlying data again from the beginning. But it cannot jump to an arbitrary byte offset elsewhere in the stream, since that offset has no meaning inside the compressed byte stream. Seeking anywhere other than back to the very start now emits this warning and fails, instead of repositioning the stream to a location that no longer matches what has actually been decompressed.

## Example

```php
<?php

$stream = fopen('php://temp', 'r+');
fwrite($stream, str_repeat('a', 100));
rewind($stream);

stream_filter_append($stream, 'zlib.deflate', STREAM_FILTER_READ);

fread($stream, 10);
fseek($stream, 5, SEEK_CUR);

?>
```

## Literal Examples
+ Stream filter zlib.deflate is seekable only to start position

## Alternatives
+ Only rewind a stream read through such a filter back to position 0 (e.g. with rewind()); don't seek to an arbitrary offset while the filter is attached.

## Related error messages
+ [stream-filter-%s-is-never-seekable](stream-filter-%s-is-never-seekable.html)
+ [stream-filter-seeking-for-%s-failed](stream-filter-seeking-for-%s-failed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, fseek() did not consult filter seekability at all: seeking a stream with a decompression filter attached always appeared to succeed, even when the requested offset had no valid meaning for the filter.](Prior to PHP 8.6, fseek() did not consult filter seekability at all: seeking a stream with a decompression filter attached always appeared to succeed, even when the requested offset had no valid meaning for the filter.)