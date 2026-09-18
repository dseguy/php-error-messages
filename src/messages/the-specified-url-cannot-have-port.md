# The specified URL cannot have port

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-url-cannot-have-port.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-url-cannot-have-port.html","name":"The specified URL cannot have port","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-18T18:50:34+02:00","dateModified":"2026-09-18T18:50:34+02:00","description":"The WHATWG URL Standard, implemented by the ``Uri\\WhatWg\\Url`` class introduced in PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/the-specified-url-cannot-have-port.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
The WHATWG URL Standard, implemented by the `Uri\WhatWg\Url` class introduced in PHP 8.5, forbids credentials and a port on `file:` URLs: a local file path has no notion of a remote network endpoint. Calling `withPort()` on a URL whose scheme is `file` therefore throws instead of silently producing an invalid URL.

## Example

```php
<?php

use Uri\WhatWg\Url;

$url = new Url('file:///path/to/file');

$url = $url->withPort(8080);

?>
```

## Alternatives
+ Do not set a port on a ``file:`` URL.
+ Use a scheme that supports a port component, such as ``http`` or ``ftp``, if a network endpoint is actually needed.

## Related error messages
+ [the-specified-url-cannot-have-username](the-specified-url-cannot-have-username.html)
+ [the-specified-url-cannot-have-password](the-specified-url-cannot-have-password.html)

In previous PHP versions, this error message used to be :ref:`the-specified-url-cannot-have-password`.
# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()