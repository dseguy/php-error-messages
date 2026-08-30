# Stream filter %s is never seekable

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-ps-is-never-seekable.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-ps-is-never-seekable.html","name":"Stream filter %s is never seekable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-28T21:05:40+00:00","dateModified":"2026-08-28T21:05:40+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-ps-is-never-seekable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 fixes a long-standing inconsistency (bug #49874) between `fseek()`/`ftell()` and stream filters: seeking a stream now checks whether every filter currently attached to the affected chain (read or write) can actually tolerate the requested seek, instead of blindly repositioning the stream and leaving filtered/compressed data out of sync with the raw underlying position.

Some filters, such as `zlib.deflate` and `zlib.inflate`, accept a `write_seek_mode` filter parameter controlling how seeks on their write side are handled: `'preserve'` (the default, always seekable), `'reset'` (seekable only back to the start), or `'strict'` (never seekable once data has started flowing through the filter). With `'strict'` in effect, any seek attempt now emits this warning and fails, instead of silently succeeding and corrupting the filtered output.

## Example

```php
<?php

$stream = fopen('php://temp', 'r+');
fwrite($stream, str_repeat('a', 100));
rewind($stream);

stream_filter_append($stream, 'zlib.deflate', STREAM_FILTER_WRITE, ['write_seek_mode' => 'strict']);

fseek($stream, 0);

?>
```

## Literal Examples
+ Stream filter zlib.deflate is never seekable

## Alternatives
+ Don't seek a stream whose filter chain was configured with write_seek_mode => 'strict', or use 'preserve'/'reset' instead if the stream genuinely needs to be seekable.

## Related error messages
+ [stream-filter-%s-is-seekable-only-to-start-position](stream-filter-%s-is-seekable-only-to-start-position.html)
+ [stream-filter-seeking-for-%s-failed](stream-filter-seeking-for-%s-failed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, fseek() did not consult filter seekability at all: seeking a stream with filters attached always appeared to succeed, even when it left the filter's internal state inconsistent with the new stream position.](Prior to PHP 8.6, fseek() did not consult filter seekability at all: seeking a stream with filters attached always appeared to succeed, even when it left the filter's internal state inconsistent with the new stream position.)