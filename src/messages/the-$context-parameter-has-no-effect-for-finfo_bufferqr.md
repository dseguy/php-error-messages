# The $context parameter has no effect for finfo_buffer()

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$context-parameter-has-no-effect-for-finfo_bufferqr.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$context-parameter-has-no-effect-for-finfo_bufferqr.html","name":"The $context parameter has no effect for finfo_buffer()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"``finfo_buffer()`` (and ``finfo::buffer()``) accept an optional ``$context`` parameter, mirroring the signature of stream-related functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-$context-parameter-has-no-effect-for-finfo_bufferqr.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`finfo_buffer()` (and `finfo::buffer()`) accept an optional `$context` parameter, mirroring the signature of stream-related functions. Unlike `finfo_file()`, which does use a stream context to open the file it inspects, `finfo_buffer()` operates directly on an in-memory string and never opens a stream, so the `$context` argument has never had any effect.

As of PHP 8.5.0, passing a value for `$context` raises a deprecation notice to reflect that fact.

## Example

```php
<?php

$finfo = new finfo(FILEINFO_MIME_TYPE);
$context = stream_context_create();

echo $finfo->buffer('some data', FILEINFO_NONE, $context);

?>
```

## Alternatives
+ Stop passing a ``$context`` argument to ``finfo_buffer()``/``finfo::buffer()``.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[finfo_buffer](finfo_buffer)