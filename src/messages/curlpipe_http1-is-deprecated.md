# CURLPIPE_HTTP1 is deprecated

## Description
`CURLPIPE_HTTP1` is a flag that used to enable HTTP/1.1 pipelining when passed to `curl_multi_setopt()` with the `CURLMOPT_PIPELINING` option. Support for HTTP/1.1 pipelining was removed from libcurl itself in version 7.62.0, because it proved fragile and was superseded by HTTP/2 multiplexing.

When PHP is linked against a libcurl older than 7.62.0, setting this flag still works but now raises an `E_DEPRECATED` notice. When linked against libcurl 7.62.0 or later (the common case on current systems), the same code instead raises an `E_WARNING` stating that `CURLPIPE_HTTP1` is no longer supported, and the flag has no effect either way.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/curlpipe_http1-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/curlpipe_http1-is-deprecated.html","name":"CURLPIPE_HTTP1 is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:54:43 +0000","dateModified":"Tue, 11 Aug 2026 20:54:43 +0000","description":"``CURLPIPE_HTTP1`` is a flag that used to enable HTTP\/1","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/curlpipe_http1-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

$mh = curl_multi_init();
curl_multi_setopt($mh, CURLMOPT_PIPELINING, CURLPIPE_HTTP1);

?>
```

## Alternatives
+ Remove ``CURLPIPE_HTTP1`` from the value passed to ``curl_multi_setopt($mh, CURLMOPT_PIPELINING, ...)``.
+ Use ``CURLPIPE_MULTIPLEX`` to enable HTTP/2 multiplexing instead.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[curl_multi_setopt](curl_multi_setopt)