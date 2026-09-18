# The specified URI is malformed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-uri-is-malformed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-uri-is-malformed.html","name":"The specified URI is malformed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:42+00:00","dateModified":"2026-09-18T17:16:42+00:00","description":"``Uri\\Rfc3986\\Uri::__construct()`` and ``Uri\\Rfc3986\\Uri::parse()`` reject any input string that does not conform to the RFC 3986 URI grammar as a whole \u2014 as opposed to a failure on a single component such as the scheme or host","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-uri-is-malformed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Uri\Rfc3986\Uri::__construct()` and `Uri\Rfc3986\Uri::parse()` reject any input string that does not conform to the RFC 3986 URI grammar as a whole — as opposed to a failure on a single component such as the scheme or host. An empty scheme before `://`, as above, is one such case, but any structurally invalid URI string triggers it.

The WHATWG-flavored `Uri\WhatWg\Url` (used via `Uri\WhatWg\Url::parse()` or its constructor) throws `Uri\WhatWg\InvalidUrlException` with the same base message, but appends the specific WHATWG validation failure in parentheses, e.g. `The specified URI is malformed (HostMissing)`, and exposes the full list of validation errors through the exception's `errors` property.

## Example

```php
<?php

new Uri\Rfc3986\Uri('://example.com');

?>
```

## Alternatives
+ Validate or normalize the URI string before parsing it, or wrap the parse call in a try/catch.
+ When using the WHATWG parser, inspect the exception's ``errors`` property for the precise reason.

## Related error messages
+ [the-specified-scheme-is-malformed](the-specified-scheme-is-malformed.html)
+ [the-specified-userinfo-is-malformed](the-specified-userinfo-is-malformed.html)
+ [must-be-a-list-of-%s](must-be-a-list-of-%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()