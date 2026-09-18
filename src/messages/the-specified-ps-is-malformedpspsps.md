# The specified %s is malformed%s%s%s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-ps-is-malformedpspsps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-ps-is-malformedpspsps.html","name":"The specified %s is malformed%s%s%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T18:50:34+02:00","dateModified":"2026-09-18T18:50:34+02:00","description":"This is the detailed variant of the parsing error raised by the native URI extension, introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-ps-is-malformedpspsps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
This is the detailed variant of the parsing error raised by the native URI extension, introduced in PHP 8.5, when a string handed to `Uri\Rfc3986\Uri` or `Uri\WhatWg\Url` cannot be parsed as a valid URI/URL. In addition to naming what was being parsed (`URI` or `URL`), the extra placeholders append the detailed diagnostic produced by the underlying parser, such as the specific validation error and, when possible, a pointer to the offending part of the string.

## Example

```php
<?php

use Uri\Rfc3986\Uri;

try {
    $uri = new Uri('https:// example.com');
} catch (\Uri\InvalidUriException $e) {
    echo $e->getMessage();
}

?>
```

## Alternatives
+ Fix the malformed component reported in the exception message before constructing the URI.
+ Validate or normalize untrusted input before passing it to the ``Uri`` classes.
+ Call ``Uri\InvalidUriException::getErrors()`` to inspect the individual validation errors programmatically.

## Related error messages
+ [the-specified-%s-is-malformed](the-specified-%s-is-malformed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()