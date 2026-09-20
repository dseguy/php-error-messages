# Using more than " ZEND_LONG_FMT " filters in a php://filter URL is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-more-than--zend_long_fmt--filters-in-a-php:--filter-url-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-more-than--zend_long_fmt--filters-in-a-php:--filter-url-is-deprecated.html","name":"Using more than \" ZEND_LONG_FMT \" filters in a php:\/\/filter URL is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-20T20:02:36+00:00","dateModified":"2026-09-20T20:02:36+00:00","description":"A ``php:\/\/filter\/","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/using-more-than--zend_long_fmt--filters-in-a-php:--filter-url-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A `php://filter/...` URL can chain any number of stream filters with `|`. To bound the cost of building very long chains, PHP now caps the number of filters read from a single URL at 16 (`ZEND_LONG_FMT` is a printf-style placeholder for a platform-independent long integer, substituted with `16` in the actual message) unless a higher limit is configured explicitly. Exceeding that default without configuring it emits this deprecation; a future version will make the limit a hard error instead.

## Example

```php
<?php

$filters = str_repeat('string.toupper|', 17) . 'string.toupper';

echo file_get_contents("php://filter/$filters/resource=data:text/plain,hello");

?>
```

## Literal Examples
+ Using more than 16 filters in a php://filter URL is deprecated, set this limit using the stream context option max_filter_count, or use stream_filter_append

## Alternatives
+ Set the stream context option ``filter`` => ``max_filter_count`` to the number of filters you actually need, e.g. via ``stream_context_create(['filter' => ['max_filter_count' => 32]])``.
+ Build the chain with repeated stream_filter_append() calls instead of a long php://filter URL; it is not subject to this limit.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()