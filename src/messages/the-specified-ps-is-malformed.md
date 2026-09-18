# The specified %s is malformed

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-ps-is-malformed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-ps-is-malformed.html","name":"The specified %s is malformed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T15:50:38+00:00","dateModified":"2026-09-18T15:50:38+00:00","description":"The native URI extension, introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-ps-is-malformed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The native URI extension, introduced in PHP 8.5, throws this exception when the string passed to `Uri\Rfc3986\Uri` or `Uri\WhatWg\Url` cannot be parsed as a valid URI/URL at all, and no further diagnostic detail is available to attach to the message. `%s` names what was being parsed (`URI` for the RFC 3986 parser, `URL` for the WHATWG parser).

## Example

```php
<?php

use Uri\Rfc3986\Uri;

try {
    $uri = new Uri('not a valid uri');
} catch (\Uri\InvalidUriException $e) {
    echo $e->getMessage();
}

?>
```

## Literal Examples
+ The specified URI is malformed
+ The specified URL is malformed

## Alternatives
+ Check the input string against the expected URI/URL syntax before parsing it.
+ Wrap the constructor call in a try/catch block and report or discard invalid input gracefully.

## Related error messages
+ [the-specified-%s-is-malformed%s%s%s](the-specified-%s-is-malformed%s%s%s.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()