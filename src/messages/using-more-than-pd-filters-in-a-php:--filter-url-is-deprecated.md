# Using more than %d filters in a php://filter URL is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-more-than-pd-filters-in-a-php:--filter-url-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-more-than-pd-filters-in-a-php:--filter-url-is-deprecated.html","name":"Using more than %d filters in a php:\/\/filter URL is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-17T16:24:13+02:00","dateModified":"2026-08-17T16:24:13+02:00","description":"The ``php:\/\/filter`` stream wrapper lets several conversion filters be chained in a single URL, separated by ``|``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-more-than-pd-filters-in-a-php:--filter-url-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The `php://filter` stream wrapper lets several conversion filters be chained in a single URL, separated by `|`. By default, PHP now limits the number of filters that can be chained this way to 16; exceeding that limit triggers this deprecation, and a future version is expected to turn it into a hard failure.

The limit only applies to filters listed directly in a `php://filter` URL. It does not affect filters added programmatically with `stream_filter_append()`, nor is it lowered unless a smaller `max_filter_count` is explicitly configured on the stream context (in which case exceeding it already fails immediately, without this deprecation).

Restricting the default chain length also mitigates a known exploitation technique ("PHP filter chains") that abuses very long filter chains to convert an arbitrary-read vulnerability into code execution by repeatedly transcoding a string in memory.

## Example

```php
<?php

$filters = implode('|', array_fill(0, 17, 'string.toupper'));

// deprecated: more than 16 filters chained directly in the URL
$data = file_get_contents("php://filter/read=$filters/resource=php://memory");

?>
```

## Literal Examples
+ Using more than 16 filters in a php://filter URL is deprecated

## Alternatives
+ Raise or override the default limit by setting the ``filter.max_filter_count`` stream context option, e.g. ``stream_context_create(['filter' => ['max_filter_count' => 100]])``.
+ Use ``stream_filter_append()`` to add filters programmatically instead of chaining a long list of them in the URL.
+ Reduce the number of chained filters if the default of 16 is sufficient.

## Related error messages
+ [cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure](cannot-use-both-filter\_null\_on\_failure-and-filter\_throw\_on\_failure.html)

## Related error messages
+ [php://filter](https://www.php.net/manual/en/wrappers.php.php#wrappers.php.filter)
+ [stream_filter_append](https://www.php.net/manual/en/function.stream-filter-append.php)
+ [stream_context_create](https://www.php.net/manual/en/function.stream-context-create.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()