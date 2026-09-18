# must be a list of %s

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-list-of-ps.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-list-of-ps.html","name":"must be a list of %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T17:16:51+00:00","dateModified":"2026-09-18T17:16:51+00:00","description":"``Uri\\WhatWg\\InvalidUrlException::__construct()`` accepts an ``$errors`` argument describing every WHATWG URL validation failure that occurred","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-a-list-of-ps.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`Uri\WhatWg\InvalidUrlException::__construct()` accepts an `$errors` argument describing every WHATWG URL validation failure that occurred. That argument must be a list (contiguous, zero-based keys) whose every value is an instance of `Uri\WhatWg\UrlValidationError`. Any other array shape — associative keys, non-sequential indices, or elements that are not `UrlValidationError` objects — is rejected with this `ValueError`.

## Example

```php
<?php

new Uri\WhatWg\InvalidUrlException(
    'bad url',
    ['not a validation error object'],
);

?>
```

## Literal Examples
+ Uri\WhatWg\InvalidUrlException::__construct(): Argument #2 ($errors) must be a list of Uri\WhatWg\UrlValidationError

## Alternatives
+ Pass an array of ``Uri\WhatWg\UrlValidationError`` instances only, built with ``array_values()`` if it might have gaps or string keys.
+ Let the WHATWG URL parser construct and throw this exception itself, rather than constructing it manually.

## Related error messages
+ [the-specified-uri-is-malformed](the-specified-uri-is-malformed.html)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()