# Stream filter seeking for %s failed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-seeking-for-ps-failed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-seeking-for-ps-failed.html","name":"Stream filter seeking for %s failed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-28T21:06:22+00:00","dateModified":"2026-08-28T21:06:22+00:00","description":"PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/stream-filter-seeking-for-ps-failed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
PHP 8.6 fixes a long-standing inconsistency (bug #49874) between `fseek()`/`ftell()` and stream filters: seeking now defers to each attached filter's own seek logic instead of blindly repositioning the stream. A custom filter registered via `stream_filter_register()` can implement a `seek(int $offset, int $whence, int $chain): bool` method to participate in that decision; if it returns `false`, the requested seek is now treated as failed and this warning is emitted, instead of the stream silently repositioning while the filter's own internal state (e.g. a decompression buffer) drifted out of sync.

The `%s` placeholder in this message is always the literal string "user-filter" for any custom, PHP-defined filter class, regardless of the name it was registered under with stream_filter_register(); only PHP's own built-in filters (like zlib.inflate) report their own name.

## Example

```php
<?php

class DenySeekFilter extends php_user_filter
{
    public function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;
    }

    public function seek(int $offset, int $whence, int $chain): bool
    {
        return false;
    }
}

stream_filter_register('deny.seek', DenySeekFilter::class);

$stream = fopen('php://temp', 'r+');
fwrite($stream, 'hello world');
rewind($stream);

stream_filter_append($stream, 'deny.seek');

fseek($stream, 3);

?>
```

## Literal Examples
+ Stream filter seeking for user-filter failed

## Alternatives
+ Make a custom filter's seek() method return true for any offset it can actually honor, or omit the method entirely to let all seeks succeed as before.

## Related error messages
+ [stream-filter-%s-is-never-seekable](stream-filter-%s-is-never-seekable.html)
+ [stream-filter-%s-is-seekable-only-to-start-position](stream-filter-%s-is-seekable-only-to-start-position.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[Prior to PHP 8.6, a custom filter's onSeek() return value had no effect on fseek(): the stream was always repositioned regardless of what the filter reported.](Prior to PHP 8.6, a custom filter's onSeek() return value had no effect on fseek(): the stream was always repositioned regardless of what the filter reported.)