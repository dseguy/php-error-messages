# The specified scheme is malformed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-scheme-is-malformed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-scheme-is-malformed.html","name":"The specified scheme is malformed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:37+00:00","dateModified":"2026-09-18T17:16:37+00:00","description":"A URI scheme must be a non-empty string starting with a letter, followed only by letters, digits, ``+``, ``-`` or ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-scheme-is-malformed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
A URI scheme must be a non-empty string starting with a letter, followed only by letters, digits, `+`, `-` or `.` (RFC 3986, section 3.1). `Uri\Rfc3986\Uri::withScheme()` and `Uri\Rfc3986\UriBuilder::setScheme()` validate this and throw when the value does not fit that grammar — including an empty string, as shown above.

The WHATWG-flavored `Uri\WhatWg\Url::withScheme()` reports the same message, though a *parse* failure (rather than a modification failure) additionally appends the specific WHATWG validation error in parentheses, e.g. `The specified scheme is malformed (MissingSchemeNonRelativeUrl)`.

## Example

```php
<?php

$uri = Uri\Rfc3986\Uri::parse('https://example.com');

$uri = $uri->withScheme('');

?>
```

## Alternatives
+ Use a scheme made only of ASCII letters, digits, ``+``, ``-`` and ``.``, starting with a letter.
+ Do not pass an empty string to withScheme() / setScheme().

## Related error messages
+ [the-specified-uri-is-malformed](the-specified-uri-is-malformed.html)
+ [failed-to-update-the-scheme](failed-to-update-the-scheme.html)

In more recent PHP versions, this error message is now :ref:`failed-to-update-the-scheme`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()